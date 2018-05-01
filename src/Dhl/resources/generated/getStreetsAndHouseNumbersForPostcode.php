<?php
return array (
  'getStreetsAndHouseNumbersForPostcode' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/postal-codes/nl/{postcode}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'postcode' => 
      array (
        'description' => 'PC6 format: 1234AB',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
    ),
    'summary' => 'Finds the city, streets and all the housenumbers on that street for the given the postcode in the Netherlands.',
  ),
);