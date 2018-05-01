<?php

namespace Dhl;

use Dhl\Config\AuthClientConfig;
use Dhl\Config\AuthStrategyConfig;
use Dhl\Config\ClientDefaultsConfig;
use Dhl\Config\HttpClientConfig;
use Dhl\Config\ServiceDescriptionConfig;

class Config
{
    /**
     * @see AuthClientConfig
     *
     * @var array
     */
    protected $authClientConfig;

    /**
     * @see AuthStrategyConfig
     *
     * @var array
     */
    protected $authStrategyConfig;

    /**
     * @see ClientDefaultsConfig
     *
     * @var array
     */
    protected $clientDefaultsConfig;

    /**
     * @see HttpClientConfig
     *
     * @var array
     */
    protected $httpClientConfig;

    /**
     * @see ServiceDescriptionConfig
     *
     * @var array
     */
    protected $serviceDescriptionConfig;

    /**
     * Config constructor.
     * @param array $config
     */
    public function __construct(array $config = null)
    {
        $authStrategyConfig = new AuthStrategyConfig($config);
        $this->setAuthStrategyConfig($authStrategyConfig());

        $defaultClientConfig = new ClientDefaultsConfig($config);
        $this->setClientDefaultsConfig($defaultClientConfig());

        $httpClientConfig = new HttpClientConfig($config);
        $this->setHttpClientConfig($httpClientConfig());

        $serviceDescriptionConfig = new ServiceDescriptionConfig($config);
        $this->setServiceDescriptionConfig($serviceDescriptionConfig());
    }

    /**
     * @return array
     */
    public function getAuthClientConfig()
    {
        return $this->authClientConfig;
    }

    /**
     * @param array $authClientConfig
     */
    public function setAuthClientConfig($authClientConfig)
    {
        $this->authClientConfig = $authClientConfig;
    }

    /**
     * @return array
     */
    public function getAuthStrategyConfig()
    {
        return $this->authStrategyConfig;
    }

    /**
     * @param array $authStrategyConfig
     */
    public function setAuthStrategyConfig($authStrategyConfig)
    {
        $this->authStrategyConfig = $authStrategyConfig;
    }

    /**
     * @return array
     */
    public function getClientDefaultsConfig()
    {
        return $this->clientDefaultsConfig;
    }

    /**
     * @param array $clientDefaultsConfig
     */
    public function setClientDefaultsConfig($clientDefaultsConfig)
    {
        $this->clientDefaultsConfig = $clientDefaultsConfig;
    }

    /**
     * @return array
     */
    public function getHttpClientConfig()
    {
        return $this->httpClientConfig;
    }

    /**
     * @param array $httpClientConfig
     */
    public function setHttpClientConfig($httpClientConfig)
    {
        $this->httpClientConfig = $httpClientConfig;
    }

    /**
     * @return array
     */
    public function getServiceDescriptionConfig()
    {
        return $this->serviceDescriptionConfig;
    }

    /**
     * @param array $serviceDescriptionConfig
     */
    public function setServiceDescriptionConfig($serviceDescriptionConfig)
    {
        $this->serviceDescriptionConfig = $serviceDescriptionConfig;
    }
}