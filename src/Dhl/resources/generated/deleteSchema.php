<?php
return array (
  'deleteSchema' => 
  array (
    'httpMethod' => 'DELETE',
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
    'summary' => 'Delete a schema',
  ),
);