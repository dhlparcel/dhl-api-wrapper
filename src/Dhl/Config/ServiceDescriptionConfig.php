<?php

namespace Dhl\Config;


class ServiceDescriptionConfig
{
    /**
     * @var string
     */
    protected $baseUri;

    /**
     * @var array
     */
    protected $operationsConfig;

    /**
     * @see \GuzzleHttp\Tests\Command\Guzzle\ResponseLocation\JsonLocationTest
     *
     * @var array
     */
    protected $modelsConfig = [
        'getResponse' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ],
        ],
        'getCountries' => [
            'type' => 'array',
            'location' => 'json',
            'name' => 'countries',
            'items' => [
                'type' => 'string',
            ],
        ],
//        'getCapabilities' => [
//            'type' => 'object',
//            'location' => 'json',
//            'properties' => [
//                'nested' => [
//                    'type' => 'object',
//                    'properties' => [
//                        'foo' => ['type' => 'string'],
//                        'bar' => ['type' => 'number'],
//                        'bam' => [
//                            'type' => 'object',
//                            'properties' => [
//                                'abc' => [
//                                    'type' => 'number'
//                                ]
//                            ]
//                        ]
//                    ]
//                ]
//            ],
//            'additionalProperties' => [
//                'type' => 'string',
//                'filters' => ['strtoupper']
//            ],
//        ],
//        'j' => [
//            'type' => 'array',
//            'location' => 'json',
//            'name' => 'j',
//            'items' => [
//                'type' => 'object',
//                'additionalProperties' => [
//                    'type' => 'string',
//                    'filters' => ['strtoupper']
//                ]
//            ]
//        ],
//        'Cars' => [
//            'type' => 'object',
//            'location' => 'json',
//            'properties' => [
//                'cars' => [
//                    'type' => 'array',
//                    'sentAs' => 'car_models',
//                    'items' => [
//                        'type' => 'object',
//                    ]
//                ]
//            ],
//        ],
    ];

    /**
     * DHLParcel_Config_MergeConfig constructor.
     * @param array $config
     */
    public function __construct($config = null)
    {
        if ($config !== null) {
            $this->setConfig($config);
        }
    }

    /**
     * @return array
     */
    public function __invoke()
    {
        if ($this->operationsConfig === null) {
            $this->operationsConfig = $this->mergeGeneratedConfig();
        }
        return [
            'baseUri' => $this->getBaseUri(),
            'operations' => $this->getOperationsConfig(),
            'models' => $this->getModelsConfig(),
        ];
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config)
    {
        if (array_key_exists('baseUri', $config)) {
            $this->baseUri = $config['baseUri'];
        }
        if (array_key_exists('models', $config)) {
            $this->modelsConfig = $config['models'];
        }
        if (array_key_exists('operations', $config)) {
            $this->operationsConfig = $config['operations'];
        }
    }

    /**
     * @return array
     */
    protected function mergeGeneratedConfig()
    {
        $mergeConfig = [];
        foreach (glob(realpath(__DIR__) . '/../resources/*.php') as $file) {
            $config = require $file;
            $mergeConfig = array_merge($mergeConfig, $config);
        }
        return $mergeConfig;
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
     * @return ServiceDescriptionConfig
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
        return $this;
    }

    /**
     * @return array
     */
    public function getOperationsConfig()
    {
        return $this->operationsConfig;
    }

    /**
     * @param array $operationsConfig
     * @return ServiceDescriptionConfig
     */
    public function setOperationsConfig($operationsConfig)
    {
        $this->operationsConfig = $operationsConfig;
        return $this;
    }

    /**
     * @return array
     */
    public function getModelsConfig()
    {
        return $this->modelsConfig;
    }

    /**
     * @param array $modelsConfig
     * @return ServiceDescriptionConfig
     */
    public function setModelsConfig($modelsConfig)
    {
        $this->modelsConfig = $modelsConfig;
        return $this;
    }
}