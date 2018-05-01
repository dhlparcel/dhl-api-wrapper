<?php
return array (
  'refreshToken' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/authenticate/refresh-token',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'RefreshTokenCredentials',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'refreshToken' => 
          array (
            'name' => 'refreshToken',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
    ),
    'summary' => 'Obtain an access token / refresh token by providing a refresh token',
  ),
);