<?php

namespace Dhl\Config;

use ArrayAccess;
use ArrayObject;
use BadMethodCallException;

class ConfigAbstract
{
    /**
     * @var ArrayObject
     */
    protected $data;

    /**
     * @var array
     */
    protected $requiredConfig = [];

    /**
     * Config constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = new ArrayObject($data);
        $this->testConfig();
    }

    /**
     * Overloading function handling all getters, setters, has* & uns*
     *
     * @param string $name
     * @param mixed $arguments
     * @return array|bool|ConfigAbstract
     */
    public function __call($name, $arguments)
    {
        $method = substr($name, 0, 3);
        $key = lcfirst(substr($name, 3));

        switch ($method) {
            case 'get':
                return $this->getData($key);
            case 'set':
                return $this->setData($key, array_shift($arguments));
            case 'uns':
                return $this->unsetData($key);
            case 'has':
                return $this->hasData($key);
        }
        $message = sprintf('Invalid method %s::%s', get_class($this), $name);
        throw new BadMethodCallException($message);
    }

    /**
     * @param string|null $key
     * @return array
     */
    public function getData($key = null)
    {
        if ($key === null) {
            return $this->data->getArrayCopy();
        }
        if (!$this->hasData($key)) {
            return null;
        }
        return $this->data->offsetGet($key);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function hasData($key)
    {
        return $this->data->offsetExists($key);
    }

    /**
     * @param string|array $key
     * @param mixed $value
     * @return ConfigAbstract
     */
    public function setData($key, $value = null)
    {
        if (is_array($key) && $value === null) {
            $this->data->exchangeArray($key);
        } else {
            $this->data->offsetSet($key, $value);
        }
        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function unsetData($key)
    {
        $this->data->offsetUnset($key);
        return !$this->hasData($key);
    }

    /**
     * @throws BadMethodCallException
     * @return bool
     */
    public function testConfig()
    {
        $missingConfig = [];
        foreach ($this->requiredConfig as $requiredKey) {
            if (!$this->hasData($requiredKey)) {
                $missingConfig[] = $requiredKey;
            }
        }
        if (!empty($missingConfig)) {
            $message = sprintf('%s missing config: %s.', get_class($this), implode(', ', $missingConfig));
            throw new BadMethodCallException($message);
        }
        return true;
    }
}