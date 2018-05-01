<?php
return array (
  'destinationCountries' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/destination-countries/{senderType}/{fromCountry}',
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
    'summary' => 'Retrieve the destination countries',
  ),
);