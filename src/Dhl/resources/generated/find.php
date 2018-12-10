<?php
return array (
  'find' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/pickup-requests',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'accountIds' => 
      array (
        'description' => 'Optional list of account ids used to filter the pickup requests',
        'type' => 'array',
        'required' => false,
        'location' => 'query',
        'items' => 
        array (
          'type' => 'string',
        ),
      ),
      'query' => 
      array (
        'description' => 'Optional query for full text search',
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'limit' => 
      array (
        'description' => 'Maximum number of records to return',
        'type' => 'integer',
        'required' => false,
        'default' => 10,
        'location' => 'query',
        'format' => 'int32',
      ),
      'skip' => 
      array (
        'description' => 'Number of records to skip',
        'type' => 'integer',
        'required' => false,
        'default' => 0,
        'location' => 'query',
        'format' => 'int32',
      ),
    ),
    'summary' => 'Retrieve pickup requests for a user',
  ),
);