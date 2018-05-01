<?php
return array (
  'getStreetsES' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/streets/es',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'postalCode' => 
      array (
        'description' => 'PC6 format: 28001',
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