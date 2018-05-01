<?php
return array (
  'parcelTypesV2a' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/parcel-types/{senderType}/{fromCountry}',
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
      'fromCountry' => 
      array (
        'description' => 'The code for the origin country',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
      'toCountry' => 
      array (
        'description' => 'The code for the destination country',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'fromPostalCode' => 
      array (
        'description' => 'The postal code for the sender country',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'toPostalCode' => 
      array (
        'description' => 'The postal code for the destination country',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'toBusiness' => 
      array (
        'description' => 'Indicates whether or not the destination is a business',
        'type' => 'boolean',
        'required' => false,
        'location' => 'query',
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
    ),
    'summary' => 'Retrieve the parcel types v2a',
  ),
);