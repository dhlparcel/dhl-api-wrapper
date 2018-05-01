<?php

namespace Dhl\Config;

use Dhl\Middleware\AuthMiddleware;
use GuzzleHttp\RequestOptions;

/**
 * Class AuthClientConfig
 *
 * @method string getBaseUri()
 * @method string getApiUser()
 * @method string getApiKey()
 * @method string getAccountId()
 * @method string getOrganisationId()
 *
 * @package Dhl\Config
 */
class HttpClientConfig extends ConfigAbstract
{
    /**
     * @var array
     */
    protected $requiredConfig = [
        'baseUri',
        // 'organisationId',
    ];

    /**
     * @return array
     */
    public function __invoke()
    {
        $httpConfig = [
            'base_uri' => $this->getBaseUri(),
        ];

        $user = $this->getApiUser();
        $key = $this->getApiKey();

        if ($user && $key) {
            $httpConfig[RequestOptions::AUTH] = [$user, $key, AuthMiddleware::AUTH_TYPE_JWT];
        }

        return $httpConfig;
    }
}