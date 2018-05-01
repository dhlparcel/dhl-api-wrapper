<?php
return array (
  'getStreetsAndHouseNumbersForPostalCodePT' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/postal-codes/pt/{postalCode}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'postalCode' => 
      array (
        'description' => 'PC format: 1000-260 Lisboa',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
    ),
    'summary' => 'Finds the city and streets for the given postal code in Portugal.',
  ),
);