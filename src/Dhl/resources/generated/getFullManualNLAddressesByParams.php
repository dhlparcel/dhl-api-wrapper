<?php
return array (
  'getFullManualNLAddressesByParams' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/v2/addresses/manual/nl',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'postcode' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'huisnummer' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'kixcode' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'straat' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'woonplaats' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'gebruikersdoel' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Finds full NL address(es) by params in the manually added addresses table only',
  ),
);