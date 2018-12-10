<?php
return array (
  'getAvailability' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/pickup-availability',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'countryCode' => 
      array (
        'description' => 'Country code',
        'type' => 'string',
        'required' => true,
        'location' => 'query',
      ),
      'postalCode' => 
      array (
        'description' => 'Postal code',
        'type' => 'string',
        'required' => true,
        'location' => 'query',
      ),
    ),
    'summary' => 'Retrieves a pickup availability list for the given postal code and country code.',
  ),
);