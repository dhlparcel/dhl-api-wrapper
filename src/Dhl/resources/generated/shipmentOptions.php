<?php
return array (
  'shipmentOptions' =>
  array (
    'httpMethod' => 'GET',
    'uri' => '/shipment-options/{senderType}',
    'responseModel' => 'getResponse',
    'parameters' =>
    array (
      'senderType' =>
      array (
        'description' => 'The type of sender',
        'type' => 'string',
        'required' => true,
        'enum' =>
        array (
          0 => 'business',
          1 => 'consumer',
          2 => 'parcelShop',
        ),
        'location' => 'uri',
      ),
      'carrier' =>
      array (
        'description' => 'The carrier',
        'type' => 'string',
        'required' => false,
        'enum' =>
        array (
          0 => 'DHL-PARCEL',
          1 => 'DHL-EXPRESS',
        ),
        'location' => 'query',
      ),
      'fromCountry' =>
      array (
        'description' => 'The code of the origin country so service can return correct shipment options for this country.',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'accountNumber' =>
      array (
        'description' => 'Optional account number to filter result against the blacklist. Intersects with accounts from authorization token.',
        'type' => 'array',
        'required' => false,
        'location' => 'query',
        'items' =>
        array (
          'type' => 'string',
          'example' => '12345678',
          'default' => '',
        ),
      ),
    ),
    'summary' => 'Retrieve the parcel types',
  ),
);
