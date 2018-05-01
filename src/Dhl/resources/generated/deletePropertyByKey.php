<?php
return array (
  'deletePropertyByKey' => 
  array (
    'httpMethod' => 'DELETE',
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
    'summary' => 'Deletes a property by its primary key',
  ),
);