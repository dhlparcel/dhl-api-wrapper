<?php


require __DIR__. '/../vendor/autoload.php';
$config = require __DIR__ . '/exampleConfig.php';

$client = new \Dhl\ApiClient($config);


$parameters = [
    'senderType' => 'business',
    'fromCountry' => 'NL',
    'fromPostalCode' => '3542 AD',
    'toCountry' => 'NL',
    'toPostalCode' => '3542 AB',
];
/** @var \GuzzleHttp\Command\Result $result */
$result = $client->capabilities($parameters);

print $result;




