<?php
return array (
  'getAllProperties' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/addresses/properties',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'rangeStart' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'rangeEndInclusive' => 
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
      'value' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Provides all available properties',
  ),
);