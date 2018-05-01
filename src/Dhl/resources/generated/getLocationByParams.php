<?php
return array (
  'getLocationByParams' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/locations',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'locationType' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'region' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'key' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'addressId' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'name' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'description' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Finds location(s) by params',
  ),
);