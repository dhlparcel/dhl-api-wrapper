<?php
return array (
  'product' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/products/{productKey}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'productKey' => 
      array (
        'description' => 'The key of the product',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
    ),
    'summary' => 'Retrieve a product',
  ),
);