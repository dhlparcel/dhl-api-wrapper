<?php
return array(
    'capabilities' =>
        array(
            'httpMethod' => 'GET',
            'uri' => '/capabilities/{senderType}',
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
                    'fromCountry' =>
                        array(
                            'description' => 'The code for the origin country, required when parcelType is given',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'toCountry' =>
                        array(
                            'description' => 'The code for the destination country, required when parcelType is given',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'toBusiness' =>
                        array(
                            'description' => 'Indicates whether or not the receiver is a business',
                            'type' => 'boolean',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'returnProduct' =>
                        array(
                            'description' => 'Indicates whether or not the shipment is a return shipment',
                            'type' => 'boolean',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'parcelType' =>
                        array(
                            'description' => 'The parcel type',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'option' =>
                        array(
                            'description' => 'The shipment options (comma separated)',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query'
                        ),
                    'fromPostalCode' =>
                        array(
                            'description' => 'The postal code of the sender',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'toPostalCode' =>
                        array(
                            'description' => 'The postal code of the receiver',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'accountNumber' =>
                        array(
                            'description' => 'The account number',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                    'organisationId' =>
                        array(
                            'description' => 'The ID of the organisation',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                            'format' => 'uuid',
                        ),
                    'carrier' =>
                        array(
                            'description' => 'Related carrier for the capabilities',
                            'type' => 'string',
                            'required' => false,
                            'enum' =>
                                array(
                                    0 => 'DHL-PARCEL',
                                    1 => 'DHL-EXPRESS',
                                ),
                            'default' => 'DHL-PARCEL',
                            'location' => 'query',
                        ),
                    'referenceTimeStamp' =>
                        array(
                            'description' => 'Datetime for determining the capabilities (only for express)',
                            'type' => 'string',
                            'required' => false,
                            'location' => 'query',
                        ),
                ),
            'summary' => 'Retrieve the capabilities',
        ),
);