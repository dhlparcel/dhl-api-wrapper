<?php

require __DIR__ . '/../vendor/autoload.php';
$config = require __DIR__ . '/exampleConfig.php';

$client = new \Dhl\ApiClient($config);


// Generate a version 4 (random) UUID object
$labelId = \Ramsey\Uuid\Uuid::uuid4();

// createLabel parameters, which is custom per call
$parameters = [
    'body' => [
        'labelId' => $labelId,
        'labelFormat' => 'pdf',
        'orderReference' => 'MyOrder: 000000007',
        'parcelTypeKey' => 'SMALL',
        'receiver' => [
            'name' => [
                'firstName' => 'CustomerFirst',
                'lastName' => 'CustomerLast',
                'companyName' => null,
            ],
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '3542 AB',
                'city' => 'Utrecht',
                'street' => 'Atoomweg',
                'number' => '30',
                'isBusiness' => false,
                'addition' => null
            ],
            'email' => 'yourcustomer@example.com',
            'phoneNumber' => null,
        ],
        'shipper' => [
            'name' => [
                'firstName' => 'Plugins',
                'lastName' => 'Dhl',
                'companyName' => 'Webshop DHL',
            ],
            'address' => [
                'countryCode' => 'NL',
                'postalCode' => '3542 AD',
                'city' => 'Utrecht',
                'street' => 'Reactorweg',
                'number' => '25',
                'isBusiness' => true,
                'addition' => null
            ],
            'email' => 'plugins@dhl.com',
            'phoneNumber' => '0612345678'
        ],
        'accountId' => '08500001',
        'options' => [
            [
                'key' => 'DOOR',
            ],
            [
                'key' => 'REFERENCE',
                'input' => '000000007',
            ],
            [
                'key' => 'REFERENCE2',
                'input' => 'OrderID',
            ],
        ],
        'pieceNumber' => 1,
        'quantity' => 1,
        'automaticPrintDialog' => false,
        'application' => 'ApiWrapperv0.1.0',
    ],
];

/** @var \GuzzleHttp\Command\Result $labelResult */
$labelResult = $client->createLabel($parameters);

printf('%s%s', print_r($labelResult, true), PHP_EOL);


$trackerCode = $labelResult->offsetGet('trackerCode');


$filename = sprintf('/tmp/DHL-%s.pdf', $trackerCode);
$rawPdf = $labelResult->offsetGet('pdf');
if (!file_put_contents($filename, base64_decode($rawPdf))) {
    printf('could not write label: %s%s', $filename, PHP_EOL);
} else {
    printf('Shipping label writen: %s%s', $filename, PHP_EOL);
}


