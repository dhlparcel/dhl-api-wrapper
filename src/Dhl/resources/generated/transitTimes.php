<?php
return array (
  'transitTimes' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/transit-times/{senderType}',
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
        'required' => false,
        'location' => 'query',
      ),
      'toCountry' => 
      array (
        'description' => 'The code for the destination country',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'toBusiness' => 
      array (
        'description' => 'Indicates whether or not the receiver is a business',
        'type' => 'boolean',
        'required' => false,
        'location' => 'query',
      ),
      'product' => 
      array (
        'description' => 'The product for the transittimes',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'parcelType' => 
      array (
        'description' => 'The parcel type',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'toPostalCode' => 
      array (
        'description' => 'The postal code of the receiver',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'toCity' => 
      array (
        'description' => 'The city of the receiver',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'carrier' => 
      array (
        'description' => 'The carrier of the shipment',
        'type' => 'string',
        'required' => false,
        'enum' => 
        array (
          0 => 'DHL-PARCEL',
          1 => 'DHL-EXPRESS',
        ),
        'default' => 'DHL-PARCEL',
        'location' => 'query',
      ),
      'shipmentDate' => 
      array (
        'description' => 'Date when the shipment is sent',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Find the transit time for a country to a certain destination',
  ),
);