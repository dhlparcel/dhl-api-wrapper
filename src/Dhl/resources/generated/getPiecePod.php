<?php
return array (
  'getPiecePod' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/pieces/{id}/pod',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'id' => 
      array (
        'description' => 'PDS piece id',
        'type' => 'string',
        'location' => 'uri',
      ),
      'receiver.address.postalCode' => 
      array (
        'description' => 'The postal code of the piece for which the POD is retrieved. Only necessary when accessing the POD endpoint without an API key',
        'type' => 'string',
        'location' => 'query',
      ),
    ),
    'summary' => 'Piece POD',
  ),
);