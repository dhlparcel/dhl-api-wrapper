<?php

// apiUser, apiKey are Uuid from https://my.dhlparcel.nl/
$apiUser = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
$apiKey = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
// check examples/apiKey.php for accountId and organisationId
$accountId = 'XXXXXXXX';
$organisationId = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
$baseUri = 'https://api-gw.dhlparcel.nl/';

/*
 * dont change this, basic check + feedback
 */
if (!trim($apiUser, " X-\t\n\r\0\x0B") && !getenv('DHL_API_USER')) {
    $message = sprintf('%2$sFill in your mydhlparcel details in %1$s to run the examples.%2$s%2$s', __FILE__, PHP_EOL);
    echo $message;
    exit();
}
if (!trim($organisationId, " X-\t\n\r\0\x0B") && !getenv('DHL_API_ORGANISATIONID')) {
    $message = sprintf('%2$sFill in your mydhlparcel organisationId in %1$s to run the examples.%2$s%2$s', __FILE__, PHP_EOL);
    echo $message;
    exit();
}

return [
    'apiUser' => getenv('DHL_API_USER') ?: $apiUser,
    'apiKey' => getenv('DHL_API_KEY') ?: $apiKey,
    'accountId' => getenv('DHL_API_ACCOUNTID') ?: $accountId,
    'organisationId' => getenv('DHL_API_ORGANISATIONID') ?: $organisationId,
    'baseUri' => getenv('DHL_API_BASEURI') ?: $baseUri, // optional
];
