<?php

require __DIR__. '/../vendor/autoload.php';
$config = require __DIR__ . '/exampleConfig.php';

$client = new \Dhl\ApiClient($config);

/** @var \GuzzleHttp\Command\Result $result */
$result = $client->findParcelShopLocations(['countryCode' => 'NL', 'limit' => 3, 'zipCode' => '3542 AB']);

print $result;

/*
GuzzleHttp\Command\Result Object
(
    [0] => Array
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

            [distance] => 422
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

    [1] => Array
        (
            [id] => 8004-NL-354251
            [harmonisedId] => NL-354251
            [psfKey] => NL-354251
            [shopType] => packStation
            [name] => DHL Parcelstation Lage weide
            [keyword] => DHL PackStation
            [address] => Array
                (
                    [countryCode] => NL
                    [zipCode] => 3542AD
                    [postalCode] => 3542AD
                    [city] => UTRECHT
                    [street] => Reactorweg
                    [number] => 25
                    [addition] => -PS
                    [isBusiness] => 1
                )

            [geoLocation] => Array
                (
                    [latitude] => 52.1049812
                    [longitude] => 5.06408503
                )

            [distance] => 422
            [openingTimes] => Array
                (
                    [0] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 1
                        )

                    [1] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 2
                        )

                    [2] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 3
                        )

                    [3] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 4
                        )

                    [4] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 5
                        )

                    [5] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 6
                        )

                    [6] => Array
                        (
                            [timeFrom] => 00:00:00.000
                            [timeTo] => 23:30:00.000
                            [weekDay] => 7
                        )

                )

            [closurePeriods] => Array
                (
                )

        )

    [2] => Array
        (
            [id] => 8004-NL-354202
            [harmonisedId] => NL-354202
            [psfKey] => NL-354202
            [shopType] => parcelShop
            [name] => DHL Parcel Utrecht
            [keyword] => DHL ParcelShop
            [address] => Array
                (
                    [countryCode] => NL
                    [zipCode] => 3542CN
                    [postalCode] => 3542CN
                    [city] => UTRECHT
                    [street] => Rutherfordweg
                    [number] => 1
                    [isBusiness] => 1
                )

            [geoLocation] => Array
                (
                    [latitude] => 52.1204578
                    [longitude] => 5.05611986
                )

            [distance] => 1529
            [openingTimes] => Array
                (
                    [0] => Array
                        (
                            [timeFrom] => 08:00:00.000
                            [timeTo] => 19:00:00.000
                            [weekDay] => 1
                        )

                    [1] => Array
                        (
                            [timeFrom] => 08:00:00.000
                            [timeTo] => 19:00:00.000
                            [weekDay] => 2
                        )

                    [2] => Array
                        (
                            [timeFrom] => 08:00:00.000
                            [timeTo] => 19:00:00.000
                            [weekDay] => 3
                        )

                    [3] => Array
                        (
                            [timeFrom] => 08:00:00.000
                            [timeTo] => 19:00:00.000
                            [weekDay] => 4
                        )

                    [4] => Array
                        (
                            [timeFrom] => 08:00:00.000
                            [timeTo] => 19:00:00.000
                            [weekDay] => 5
                        )

                    [5] => Array
                        (
                            [timeFrom] => 09:00:00.000
                            [timeTo] => 13:00:00.000
                            [weekDay] => 6
                        )

                )

            [closurePeriods] => Array
                (
                )

        )

)
 */


