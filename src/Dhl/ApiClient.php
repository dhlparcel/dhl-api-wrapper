<?php

namespace Dhl;

use Dhl\Middleware\AuthMiddleware;
use Dhl\Middleware\RequestBodyRootMiddleware;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\ResultInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Psr\Log\LoggerInterface;

/**
 * Client to interact with the Dhl Parcel Api
 *
 * @method ResultInterface apiKey(array $args = ['userId' => 'userid---uuid', 'key' => 'apikey---uuid'])
 * @method ResultInterface capabilities(array $args = ['senderType' => 'business', 'fromCountry' => 'NL', '...'])
 * @method ResultInterface createLabel(array $args = ['body' => ['labelId' => '<uuid>', 'labelFormat' => 'pdf', '...']])
 * @method ResultInterface destinationCountries(array $args = ['senderType' => 'business', 'fromCountry' => 'NL'])
 * @method ResultInterface findParcelShopLocations(array $args = ['countryCode' => 'NL', 'limit' => 10, '...'])
 * @method ResultInterface findParcelShopLocationsById(array $args = ['countryCode' => 'NL', 'id' => ''])
 * @method ResultInterface getTrackAndTrace(array $args = ['key' => 'JVGL00000000000000000000,3542 AB'])
 * @method ResultInterface timeWindows(array $args = ['countryCode' => 'NL', 'postalCode' => '5021LC'])
 * @method ResultInterface getLabel(array $args = ['id' => 'label-id---uuid'])
 *
 *
 * @package Dhl
 */
class ApiClient
{
    /**
     * @var string
     */
    protected $baseUri = 'https://api-gw.dhlparcel.nl/';

    /**
     * Client config
     *
     * @var Config
     */
    protected $config;

    /**
     * Guzzle service description
     *
     * @var Description
     */
    protected $description;

    /**
     * Guzzle Http client
     *
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * Guzzle Http Auth client
     *
     * @var HttpClient
     */
    protected $authHttpClient;

    /**
     * Api client services
     *
     * @var GuzzleClient
     */
    protected $serviceClient;

    /**
     * Logger Interface
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Middleware stack
     *
     * @var array
     */
    protected $middlewarestack = [
        RequestBodyRootMiddleware::class,
    ];

    /**
     * Create a new GuzzleClient Service, ability to use the client
     * without setting properties on instantiation.
     *
     * @param array $config
     * @param LoggerInterface|null $logger
     */
    public function __construct(array $config = null, LoggerInterface $logger = null)
    {
        if (!isset($config['baseUri'])) {
            $config['baseUri'] = $this->baseUri;
        }
        $this->config = new Config($config);
        $this->logger = $logger;
    }

    /**
     * @param string $method
     * @param array $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (!$this->serviceClient) {
            $this->initServiceClient();
        }

        return call_user_func_array([$this->serviceClient, $method], $parameters);
    }

    /**
     * @return string
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * @param string $baseUri
     * @return ApiClient
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
        return $this;
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param Config $config
     * @return ApiClient
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Description $description
     * @return ApiClient
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param HttpClient $httpClient
     * @return ApiClient
     */
    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param LoggerInterface $logger
     * @return ApiClient
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @return GuzzleClient
     */
    public function getServiceClient()
    {
        return $this->serviceClient;
    }

    /**
     * @param GuzzleClient $serviceClient
     * @return ApiClient
     */
    public function setServiceClient($serviceClient)
    {
        $this->serviceClient = $serviceClient;
        return $this;
    }

    /**
     * @return HttpClient
     */
    public function getAuthHttpClient()
    {
        return $this->authHttpClient;
    }

    /**
     * @param HttpClient $authHttpClient
     */
    public function setAuthHttpClient($authHttpClient)
    {
        $this->authHttpClient = $authHttpClient;
    }

    /**
     * Sets the http client
     */
    protected function initServiceClient()
    {
        if ($this->httpClient === null) {
            $this->initHttpClients();
        }

        $serviceDescription = new Description($this->config->getServiceDescriptionConfig());
        $serviceClient = new GuzzleClient($this->getHttpClient(), $serviceDescription);

        foreach ($this->config->getClientDefaultsConfig() as $option => $value) {
            $serviceClient->setConfig($option, $value);
        }

        $this->description = $serviceDescription;
        $this->serviceClient = $serviceClient;
    }

    /**
     * Sets the http client
     */
    public function initHttpClients()
    {
        $clientConfig = $this->config->getHttpClientConfig();
        $authClient = new HttpClient($clientConfig);
        $this->setAuthHttpClient($authClient);

        $clientConfig['handler'] = $this->initHandlerStack();
        $client = new HttpClient($clientConfig);
        $this->setHttpClient($client);
    }

    /**
     * @param callable|null $handler
     * @return \GuzzleHttp\HandlerStack
     */
    public function initHandlerStack(callable $handler = null)
    {
        $handlerStack = HandlerStack::create($handler);
        if ($this->logger) {
            $handlerStack->push(Middleware::log($this->logger, new MessageFormatter(MessageFormatter::DEBUG)));
        }
        $handlerStack->push($this->initAuthMiddleware(), AuthMiddleware::class);
        /** @var string $middlewareClassname */
        foreach ($this->middlewarestack as $middlewareClassname) {
            $handlerStack->push(new $middlewareClassname, $middlewareClassname);
        }

        return $handlerStack;
    }

    /**
     * @return AuthMiddleware
     */
    public function initAuthMiddleware()
    {
        return new AuthMiddleware($this->getAuthHttpClient());
    }
}
