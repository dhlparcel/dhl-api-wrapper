<?php
return array(
    'shipmentOptions' =>
        array(
            'httpMethod' => 'GET',
            'uri' => '/shipment-options/{senderType}',
            'responseModel' => 'getResponse',
            'parameters' =>
                array(
                    'senderType' =>
                        array(
                            'description' => 'The type of sender',
                            'type' => 'string',
                            'required' => true,
                            'enum' =>
                                array(
                                    0 => 'business',
                                    1 => 'consumer',
                                    2 => 'parcelShop',
                                ),
                            'location' => 'uri',
                        ),
                    'carrier' =>
                        array(
                            'description' => 'The carrier',
                            'type' => 'string',
                            'required' => false,
                            'enum' =>
                                array(
                                    0 => 'DHL-PARCEL',
                                    1 => 'DHL-EXPRESS',
                                ),
                            'location' => 'query',
                        ),
                ),
            'summary' => 'Retrieve the parcel types',
        ),
);