<?php
return array (
  'products' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/products',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'fromCountry' => 
      array (
        'description' => 'The code for the origin country',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'businessProduct' => 
      array (
        'description' => 'If true, only business products are returned, if false only non business produdcts, otherwise all products',
        'type' => 'boolean',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Retrieve the products',
  ),
);