<?php
return array (
  'deleteLocationByParams' => 
  array (
    'httpMethod' => 'DELETE',
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
    ),
    'summary' => 'Deletes a single location by its primary key',
  ),
);