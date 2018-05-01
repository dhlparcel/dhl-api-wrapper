<?php
return array (
  'getSchema' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/import-schemas/{schemaId}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'schemaId' => 
      array (
        'description' => 'The ID of the schema to be used for this import',
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
        'format' => 'uuid',
      ),
    ),
    'summary' => 'Get a schema',
  ),
);