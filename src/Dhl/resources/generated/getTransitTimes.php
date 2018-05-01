<?php
return array (
  'getTransitTimes' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/transit-times',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'origin.countryCode' => 
      array (
        'type' => 'string',
        'location' => 'query',
      ),
      'destination.countryCode' => 
      array (
        'type' => 'string',
        'location' => 'query',
      ),
      'destination.postalCode' => 
      array (
        'type' => 'string',
        'location' => 'query',
      ),
      'product.code' => 
      array (
        'type' => 'string',
        'location' => 'query',
      ),
      'shipmentDate' => 
      array (
        'description' => 'The shipment date (in ISO-8601 format)',
        'type' => 'string',
        'location' => 'query',
        'format' => 'full-date',
      ),
    ),
    'summary' => 'Find the transit time for a country to a certain destination',
  ),
);