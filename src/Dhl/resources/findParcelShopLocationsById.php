<?php
return array(
    'findParcelShopLocationsById' =>
        array(
            'httpMethod' => 'GET',
            'uri' => '/parcel-shop-locations/{countryCode}/{id}',
            'responseModel' => 'getResponse',
            'parameters' =>
                array(
                    'countryCode' =>
                        array(
                            'type' => 'string',
                            'required' => true,
                            'location' => 'uri',
                        ),
                    'id' =>
                        array(
                            'type' => 'string',
                            'required' => true,
                            'location' => 'uri',
                        ),
                ),
            'summary' => 'Find the information for a specific parcel shop location',
        ),
);