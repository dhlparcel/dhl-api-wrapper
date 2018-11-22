<?php
return array (
  'timeWindows' =>
  array (
    'httpMethod' => 'GET',
    'uri' => '/time-windows',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'countryCode' => 
      array (
        'description' => 'The country code of the postal code',
        'type' => 'string',
        'required' => false,
        'default' => 'NL',
        'location' => 'query',
      ),
      'postalCode' => 
      array (
        'description' => 'The postal code for the delivery and/or collection time frame',
        'type' => 'string',
        'required' => false,
        'default' => '3542AD',
        'location' => 'query',
      ),
    ),
    'summary' => 'Retrieve time windows',
  ),
);