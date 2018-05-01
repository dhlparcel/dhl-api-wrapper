<?php
return array (
  'GlobalAddressSearch' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/v2/addresses/all/search',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'array of kixcodes',
        'type' => 'array',
        'required' => true,
        'location' => 'body',
        'items' => 
        array (
          'type' => 'string',
        ),
      ),
    ),
    'summary' => 'Finds full NL address(es) for all kixcodes within the provided json-array (in the request body)',
  ),
);