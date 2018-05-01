<?php
return array (
  'getStreetsPT' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/streets/pt',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'postalCode' => 
      array (
        'description' => 'PC format: 1000-260 Lisboa',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'city' => 
      array (
        'description' => 'Full city name',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'street' => 
      array (
        'description' => 'Full or partial street name',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Finds streets for the given parameters.',
  ),
);