<?php

namespace Dhl\Config;

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
class AuthClientConfig extends ConfigAbstract
{
    /**
     * @var array
     */
    protected $requiredConfig = [
        'baseUri',
        'apiUser',
        'apiKey',
        'accountId',
        // 'organisationId',
    ];

    /**
     * @return array
     */
    public function __invoke()
    {

        return [
            'base_uri' => $this->getBaseUri(),
//            'operations' => $this->getOperationsConfig(),
//            'models' => $this->getModelsConfig(),
        ];
    }
}