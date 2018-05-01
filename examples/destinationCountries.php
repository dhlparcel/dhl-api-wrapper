<?php

require __DIR__. '/../vendor/autoload.php';
$config = require __DIR__ . '/exampleConfig.php';

$client = new \Dhl\ApiClient($config);

/** @var \GuzzleHttp\Command\Result $result */
$result = $client->destinationCountries(['senderType' => 'business', 'fromCountry' => 'NL']);

print $result;
