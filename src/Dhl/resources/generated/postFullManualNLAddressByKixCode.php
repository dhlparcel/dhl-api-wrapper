<?php
return array (
  'postFullManualNLAddressByKixCode' => 
  array (
    'httpMethod' => 'POST',
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
      'body' => 
      array (
        'description' => 'address to insert',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'objectId' => 
          array (
            'name' => 'objectId',
            'type' => 'string',
            'required' => false,
          ),
          'nraandid' => 
          array (
            'name' => 'nraandid',
            'type' => 'string',
            'required' => false,
          ),
          'ruimteId' => 
          array (
            'name' => 'ruimteId',
            'type' => 'string',
            'required' => false,
          ),
          'straat' => 
          array (
            'name' => 'straat',
            'type' => 'string',
            'required' => false,
          ),
          'huisnummer' => 
          array (
            'name' => 'huisnummer',
            'type' => 'integer',
            'required' => false,
          ),
          'huisletter' => 
          array (
            'name' => 'huisletter',
            'type' => 'string',
            'required' => false,
          ),
          'huisnummerToevoeging' => 
          array (
            'name' => 'huisnummerToevoeging',
            'type' => 'string',
            'required' => false,
          ),
          'postcode' => 
          array (
            'name' => 'postcode',
            'type' => 'string',
            'required' => false,
          ),
          'woonplaatsCode' => 
          array (
            'name' => 'woonplaatsCode',
            'type' => 'string',
            'required' => false,
          ),
          'woonplaats' => 
          array (
            'name' => 'woonplaats',
            'type' => 'string',
            'required' => false,
          ),
          'gemeenteCode' => 
          array (
            'name' => 'gemeenteCode',
            'type' => 'string',
            'required' => false,
          ),
          'gemeente' => 
          array (
            'name' => 'gemeente',
            'type' => 'string',
            'required' => false,
          ),
          'provincieCode' => 
          array (
            'name' => 'provincieCode',
            'type' => 'string',
            'required' => false,
          ),
          'provincie' => 
          array (
            'name' => 'provincie',
            'type' => 'string',
            'required' => false,
          ),
          'buurtCode' => 
          array (
            'name' => 'buurtCode',
            'type' => 'string',
            'required' => false,
          ),
          'buurtNummer' => 
          array (
            'name' => 'buurtNummer',
            'type' => 'integer',
            'required' => false,
          ),
          'straatnen' => 
          array (
            'name' => 'straatnen',
            'type' => 'string',
            'required' => false,
          ),
          'objectType' => 
          array (
            'name' => 'objectType',
            'type' => 'string',
            'required' => false,
          ),
          'status' => 
          array (
            'name' => 'status',
            'type' => 'string',
            'required' => false,
          ),
          'oppervlakte' => 
          array (
            'name' => 'oppervlakte',
            'type' => 'integer',
            'required' => false,
          ),
          'gebruikersdoel' => 
          array (
            'name' => 'gebruikersdoel',
            'type' => 'string',
            'required' => false,
          ),
          'xRijksdriehoek' => 
          array (
            'name' => 'xRijksdriehoek',
            'type' => 'number',
            'required' => false,
            'format' => 'float',
          ),
          'yRijksdriehoek' => 
          array (
            'name' => 'yRijksdriehoek',
            'type' => 'number',
            'required' => false,
            'format' => 'float',
          ),
          'latitude' => 
          array (
            'name' => 'latitude',
            'type' => 'number',
            'required' => false,
            'format' => 'float',
          ),
          'longitude' => 
          array (
            'name' => 'longitude',
            'type' => 'number',
            'required' => false,
            'format' => 'float',
          ),
          'kixcode' => 
          array (
            'name' => 'kixcode',
            'type' => 'string',
            'required' => false,
          ),
          'properties' => 
          array (
            'name' => 'properties',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'items' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
    'summary' => 'Creates a full NL address for a given kixcode in the manually added addresses table AND in the geodan table',
  ),
);