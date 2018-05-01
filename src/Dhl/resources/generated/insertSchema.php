<?php
return array (
  'insertSchema' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/import-schemas',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'Schema',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
      ),
    ),
    'summary' => 'Create a schema',
  ),
);