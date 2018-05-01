<?php
return array (
  'getFullNLAddressByKixCode' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/addresses/nl/{kixcode}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'kixcode' => 
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
      ),
    ),
    'summary' => 'Finds a full NL address for a given kixcode',
  ),
);