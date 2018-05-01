<?php
return array (
  'deleteFullManualNLAddressByKixCode' => 
  array (
    'httpMethod' => 'DELETE',
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
    'summary' => 'Deletes full NL address for a given kixcode from the manually added addresses table AND the geodan table',
  ),
);