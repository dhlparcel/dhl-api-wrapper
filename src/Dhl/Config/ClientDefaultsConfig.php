<?php

namespace Dhl\Config;

/**
 * Class AuthClientConfig
 *
 * @method string getBaseUri()
 * @method string getAccountId()
 * @method string getOrganisationId()
 *
 * @package Dhl\Config
 */
class ClientDefaultsConfig extends ConfigAbstract
{
    /**
     * @var array
     */
    protected $requiredConfig = [
        'baseUri',
        // 'accountId',
        // 'organisationId',
    ];

    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'defaults' => [
                'accountId' => $this->getAccountId(),
                'accountNumber' => $this->getAccountId(),
                'organisationId' => $this->getOrganisationId(),
            ],
        ];
    }
}