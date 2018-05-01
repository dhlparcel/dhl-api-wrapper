<?php

require __DIR__. '/../vendor/autoload.php';

// FILL IN YOUR APIUSER + APIKEY
$apiUser = getenv('DHL_API_USER') ?: 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
$apiKey = getenv('DHL_API_KEY') ?: 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
$baseUri = getenv('DHL_API_BASEURI') ?: 'https://api-gw.dhlparcel.nl/';




// check if you filled in correct
if (!trim($apiUser, " X-\t\n\r\0\x0B") && !getenv('DHL_API_USER')) {
    $message = sprintf('%2$sFill in your mydhlparcel details in %1$s to run the examples.%2$s%2$s', __FILE__, PHP_EOL);
    echo $message;
    exit();
}

$client = new \Dhl\ApiClient([
    'baseUri' => $baseUri,
    'apiUser' => $apiUser,
    'apiKey' => $apiKey,
]);

/** @var GuzzleHttp\Command\Result $result */
$result = $client->apiKey(['body' => ['userId' => $apiUser, 'key' => $apiKey]]);

$token = new Dhl\Auth\Token($result->offsetGet('accessToken'));

if($token->isValid()) {
    $payload = $token->getPayload();
    print PHP_EOL;
    if (isset($payload['organizationId'])) {
        printf('organizationId: %s%s', $payload['organizationId'], PHP_EOL);
    }
    if (isset($payload['accounts'])) {
        printf('account ids: %s%s', print_r($payload['accounts'], true), PHP_EOL);
    }
}
