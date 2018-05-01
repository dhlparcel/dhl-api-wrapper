<?php
return array (
  'importCSV' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/import',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'CSV with columns matching the specified schema',
        'type' => 'string',
        'required' => true,
        'location' => 'body',
      ),
      'schema' => 
      array (
        'description' => 'The ID of the schema',
        'required' => true,
        'location' => 'query',
      ),
    ),
    'summary' => 'Import labels from CSV',
  ),
);