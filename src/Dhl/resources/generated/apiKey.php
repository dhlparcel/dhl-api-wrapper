<?php
return array (
  'apiKey' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/authenticate/api-key',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'ApiKeyCredentials',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'userId' => 
          array (
            'name' => 'userId',
            'type' => 'string',
            'required' => true,
            'format' => 'uuid',
          ),
          'key' => 
          array (
            'name' => 'key',
            'type' => 'string',
            'required' => true,
          ),
        ),
      ),
    ),
    'summary' => 'Obtain an access token / refresh token pair by authenticating with an API key',
  ),
);