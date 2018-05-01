<?php

require __DIR__. '/../vendor/autoload.php';
$config = require __DIR__ . '/exampleConfig.php';

$client = new \Dhl\ApiClient($config);

/** @var \GuzzleHttp\Command\Result $result */
$result = $client->findParcelShopLocationsById(['countryCode' => 'NL', 'id' => '8004-NL-354203']);

print $result;

/*
GuzzleHttp\Command\Result Object
(
    [id] => 8004-NL-354203
    [harmonisedId] => NL-354203
    [psfKey] => NL-354203
    [shopType] => parcelShop
    [name] => DHL Parcel Hoofdkantoor
    [keyword] => DHL ParcelShop
    [address] => Array
        (
            [countryCode] => NL
            [zipCode] => 3542AD
            [postalCode] => 3542AD
            [city] => Utrecht
            [street] => Reactorweg
            [number] => 25
            [isBusiness] => 1
        )

    [geoLocation] => Array
        (
            [latitude] => 52.1049812
            [longitude] => 5.06408503
        )

    [openingTimes] => Array
        (
            [0] => Array
                (
                    [timeFrom] => 07:30:00.000
                    [timeTo] => 17:30:00.000
                    [weekDay] => 1
                )

            [1] => Array
                (
                    [timeFrom] => 07:30:00.000
                    [timeTo] => 17:30:00.000
                    [weekDay] => 2
                )

            [2] => Array
                (
                    [timeFrom] => 07:30:00.000
                    [timeTo] => 17:30:00.000
                    [weekDay] => 3
                )

            [3] => Array
                (
                    [timeFrom] => 07:30:00.000
                    [timeTo] => 17:30:00.000
                    [weekDay] => 4
                )

            [4] => Array
                (
                    [timeFrom] => 07:30:00.000
                    [timeTo] => 17:30:00.000
                    [weekDay] => 5
                )

        )

    [closurePeriods] => Array
        (
        )

)

 */
