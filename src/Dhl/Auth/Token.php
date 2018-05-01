<?php

namespace Dhl\Auth;

use DateTime;
use DateTimeImmutable;
use InvalidArgumentException;

class Token
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var array
     */
    protected $header;

    /**
     * @var array
     */
    protected $payload;

    /**
     * @var string
     */
    protected $signature;

    /**
     * Token constructor.
     *
     * @param string $token
     * @throws InvalidArgumentException
     */
    public function __construct($token = null)
    {
        if ($token !== null) {
            $this->parse($token);
        }
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return array
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @return string
     */
    public function __toString()
    {
//        return strval($this->token);
        return print_r($this, true);
    }

    /**
     * Parse a Token
     *
     * @param string $token
     * @throws InvalidArgumentException
     */
    public function parse($token)
    {
        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            throw new InvalidArgumentException('Token is invalid');
        }
        $this->token = $token;
        $this->header = json_decode(base64_decode($parts[0]), true);
        $this->payload = json_decode(base64_decode($parts[1]), true);
        $this->signature = $parts[2];
    }

    /**
     * Checks if the token is valid
     *
     * @return bool
     */
    public function isValid()
    {
        $payload = $this->getPayload();
        if (!isset($payload['exp'])) {
            return false;
        }

        $expireDateTime = DateTimeImmutable::createFromFormat('U', $payload['exp']);
        $now = new DateTime('now');
        return ($expireDateTime->getTimestamp() - $now->getTimestamp()) > 0;
    }
}
