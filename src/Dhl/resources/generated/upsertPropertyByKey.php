<?php
return array (
  'upsertPropertyByKey' => 
  array (
    'httpMethod' => 'PUT',
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
      'body' => 
      array (
        'description' => 'property',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'rangestart' => 
          array (
            'name' => 'rangestart',
            'type' => 'string',
            'required' => false,
          ),
          'rangeendinclusive' => 
          array (
            'name' => 'rangeendinclusive',
            'type' => 'string',
            'required' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'type' => 'string',
            'required' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'type' => 'string',
            'required' => false,
          ),
          'description' => 
          array (
            'name' => 'description',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
    ),
    'summary' => 'Adds or replaces the property identified by the primary key',
  ),
);