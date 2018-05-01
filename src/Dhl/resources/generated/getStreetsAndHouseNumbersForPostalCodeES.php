<?php
return array (
  'getStreetsAndHouseNumbersForPostalCodeES' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/postal-codes/es/{postalCode}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'postalCode' => 
      array (
        'description' => 'PC6 format: 28000',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
    ),
    'summary' => 'Finds the city and streets for the given postal code in Spain.',
  ),
);