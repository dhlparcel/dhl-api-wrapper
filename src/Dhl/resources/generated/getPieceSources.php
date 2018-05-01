<?php
return array (
  'getPieceSources' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/pieces/{id}/sources',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'id' => 
      array (
        'description' => 'PDS piece id',
        'type' => 'string',
        'location' => 'uri',
      ),
    ),
    'summary' => 'Piece sources',
  ),
);