<?php

require __DIR__. '/../vendor/autoload.php';
$config = require __DIR__ . '/exampleConfig.php';

$client = new \Dhl\ApiClient($config);


$barcode = 'JVGL08500001197601656522';
$postalCode = '3542 AB';

/** @var \GuzzleHttp\Command\Result $result */
$result = $client->getTrackAndTrace(['key' => sprintf('%s,%s', $barcode, $postalCode)]);

print $result;

/*
GuzzleHttp\Command\Result Object
(
    [0] => Array
        (
            [id] => 5ad486baeba3ed6439191f2d
            [barcode] => JVGL08500001197601656522
            [date] => 2018-04-16T11:18:46.000Z
            [events] => Array
                (
                    [0] => Array
                        (
                            [category] => LEG
                            [leg] => Array
                                (
                                    [accountId] => 59572100
                                    [network] => ECOMMERCE
                                )

                            [localTimestamp] => 2018-04-16T13:18:46.000+02:00
                            [status] => LEG_CREATED
                            [timestamp] => 2018-04-16T11:18:46.000Z
                            [type] => LEG_EVENT
                        )

                    [1] => Array
                        (
                            [category] => DATA_RECEIVED
                            [localTimestamp] => 2018-04-16T13:18:46.000+02:00
                            [leg] => Array
                                (
                                    [network] => ECOMMERCE
                                )

                            [status] => DATA_RECEIVED_WITH_PREFIX_LABEL
                            [timestamp] => 2018-04-16T11:18:46.000Z
                            [type] => PIECE_EVENT
                        )

                )

            [type] => SHIPMENT
        )

)

 */