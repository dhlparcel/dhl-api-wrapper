<?php

namespace Dhl\Config;

/**
 * Class AuthClientConfig
 *
 * @method string getApiUser()
 * @method string getApiKey()
 *
 * @package Dhl\Config
 */
class AuthStrategyConfig extends ConfigAbstract
{
    /**
     * @var array
     */
    protected $requiredConfig = [
        'apiUser',
        'apiKey',
    ];

    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'username' => $this->getApiUser(),
            'password' => $this->getApiKey(),
        ];
    }
}