<?php
return array (
  'getFullManualNLAddressByKixCode' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/addresses/manual/nl/{kixcode}',
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
    'summary' => 'Finds a full NL address for a given kixcode in the manually added addresses table only',
  ),
);