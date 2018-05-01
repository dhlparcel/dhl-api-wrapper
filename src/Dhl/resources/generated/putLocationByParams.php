<?php
return array (
  'putLocationByParams' => 
  array (
    'httpMethod' => 'PUT',
    'uri' => '/v2/locations/{locationType}/{region}/{key}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'locationType' => 
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
      'region' => 
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
        'description' => 'addressId, name and description',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'addressId' => 
          array (
            'name' => 'addressId',
            'type' => 'string',
            'required' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
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
    'summary' => 'Inserts or replaces the singleton location by its primary key',
  ),
);