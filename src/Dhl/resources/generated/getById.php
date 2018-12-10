<?php
return array (
  'getById' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/pickup-requests/{id}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'id' => 
      array (
        'description' => 'UUID of the pickup request to retrieve',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
        'format' => 'uuid',
      ),
    ),
    'summary' => 'Find a  pickup requests by id',
  ),
);