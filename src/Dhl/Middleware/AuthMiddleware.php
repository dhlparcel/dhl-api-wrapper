<?php

namespace Dhl\Middleware;

use Dhl\Auth\Token;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\RejectedPromise;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;

use GuzzleHttp\Client as HttpClient;

/**
 * Class AuthMiddleware
 *
 * steps:
 *  - is auth possible? yes/no->pass
 *  - is auth jwt? yes/no->pass
 *  - is auth required? yes/no->pass
 *  - is auth stored? yes->pass/no
 *  - request auth
 *  - store auth
 *  - pass
 *
 * @package Dhl\Middleware
 */
class AuthMiddleware
{
    /**
     * @const string
     */
    const AUTH_TYPE_BASIC = 'basic';

    /**
     * Request option authentication type
     *
     * @const string
     */
    const AUTH_TYPE_JWT = 'jwt';

    /**
     * Authentication uri
     *
     * @const string
     */
    const AUTH_API_KEY = '/authenticate/api-key';

    /**
     * Authentication uri
     *
     * @const string
     */
    const AUTH_REFRESH_TOKEN = '/authenticate/refresh-token';

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var array
     */
    protected $authRequiredConfig = [
        '/labels'    => ['GET', 'POST'],
        '/shipments' => ['GET', 'POST'],
//        '/pieces/{id}/sources' => ['GET'],
//        '/v2/addresses/nl/{kixcode}' => ['GET'],
        '/v2/addresses/nl' => ['GET'],
        '/v2/addresses/all/search' => ['POST'],
//        '/v2/addresses/manual/nl/{kixcode}' => ['GET', 'POST', 'DELETE'],
        '/v2/addresses/manual/nl' => ['GET'],
//        '/v2/postal-codes/nl/{postcode}' => ['GET'],
        '/v2/locations' => ['GET'],
//        '/v2/postal-codes/es/{postalCode}' => ['GET'],
//        '/v2/postal-codes/pt/{postalCode}' => ['GET'],
        '/v2/streets/es' => ['GET'],
        '/v2/streets/pt' => ['GET'],
//        '/v2/locations/{locationType}/{region}/{key}' => ['GET', 'PUT', 'DELETE'],
        '/v2/addresses/properties' => ['GET'],
//        '/v2/addresses/properties/{rangestart}/{rangeendinclusive}/{key}' => ['GET', 'PUT', 'DELETE'],
        '/import' => ['POST'],
//        '/import-schemas/{schemaId}' => ['GET', 'DELETE'],
        '/import-schemas' => ['GET', 'POST'],
        '/import-schemas/default' => ['GET'],
    ];

    protected $authRequiredConfigRegexes = [
        '/^(\/labels\/)([0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12})/' => ['GET']
    ];

    /**
     * AuthMiddleware constructor.
     * @param HttpClient $httpClient
     */
    public function __construct($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param callable $handler
     * @return \Closure
     */
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            if (empty($options[RequestOptions::AUTH]) || !is_array($options[RequestOptions::AUTH])) {
                return $handler($request, $options);
            }

            $value = $options[RequestOptions::AUTH];

            $authType = isset($value[2]) ? strtolower($value[2]) : self::AUTH_TYPE_BASIC;
            if ($authType !== self::AUTH_TYPE_JWT) {
                return $handler($request, $options);
            }

            if ($this->httpClient === null) {
                return $handler($request, $options);
            }

            // test if authentication is required.
            if (!$this->isAuthRequired($request)) {
                return $handler($request, $options);
            }

            $user = isset($value[0]) ? trim($value[0]) : null;
            $key = isset($value[1]) ? trim($value[1]) : null;

            if ($user === null || $key === null) {
                $message = 'Auth credentials are not set correctly. Both user and key must be set';
                return new RejectedPromise(new RequestException($message, $request));
            }

            $token = new Token($accessTokenCache);
            if (!$token->isValid()) {
                try {
                    $token = $this->refreshtoken($refreshTokenCache);
                } catch (GuzzleException $exception) {
                    $token = $this->authenticate($user, $key);
                }
            }

            return $handler($request->withHeader('Authorization', sprintf('Bearer %s', $token->getToken())), $options);
        };
    }

    /**
     * @param RequestInterface $request
     * @return bool
     */
    public function isAuthRequired(RequestInterface $request)
    {
        $path = $request->getUri()->getPath();

        if (array_key_exists($path, $this->authRequiredConfig)) {
            if (in_array($request->getMethod(), $this->authRequiredConfig[$path])) {
                return true;
            }
        }

        foreach ($this->authRequiredConfigRegexes as $regex => $methods) {
            if (preg_match($regex, $path, $matches)) {
                if (in_array($request->getMethod(), $methods)) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @param string $user
     * @param string $key
     * @return Token
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function authenticate($user, $key)
    {
        $response = $this->httpClient->request('POST', self::AUTH_API_KEY, [
            'json' => [
                'userId' => $user,
                'key' => $key,
            ],
        ]);
        $jsonBody = \GuzzleHttp\json_decode($response->getBody(), true);

        return new Token($jsonBody['accessToken']);
    }

    /**
     * @param string $tokenString
     * @return Token
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function refreshtoken($tokenString)
    {
        $response = $this->httpClient->request('POST', self::AUTH_REFRESH_TOKEN, [
            'json' => [
                'refreshToken' => $tokenString,
            ],
        ]);
        $jsonBody = \GuzzleHttp\json_decode($response->getBody(), true);

        return new Token($jsonBody['accessToken']);
    }


}
