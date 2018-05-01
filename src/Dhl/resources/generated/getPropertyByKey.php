<?php
return array (
  'getPropertyByKey' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/addresses/properties/{rangestart}/{rangeendinclusive}/{key}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'rangestart' => 
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
      'rangeendinclusive' => 
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
      'key' => 
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
    ),
    'summary' => 'Finds a property by its primary key',
  ),
);