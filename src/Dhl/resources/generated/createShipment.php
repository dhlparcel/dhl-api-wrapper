<?php
return array (
  'createShipment' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/shipments',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'ShipmentSpecificationDto',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'shipmentId' => 
          array (
            'name' => 'shipmentId',
            'description' => 'Provide a UUID for the shipment',
            'type' => 'string',
            'required' => true,
            'format' => 'uuid',
            'example' => '15916857-2a31-4238-a45b-e7ba32e0e320',
          ),
          'orderReference' => 
          array (
            'name' => 'orderReference',
            'description' => 'Add an order reference by which the label can be retrieved later',
            'type' => 'string',
            'required' => false,
            'example' => 'myReference',
          ),
          'receiver' => 
          array (
            'name' => 'receiver',
            'description' => 'Receiver details',
            'type' => 'object',
            'required' => true,
            'properties' => 
            array (
              'name' => 
              array (
                'name' => 'name',
                'type' => 'object',
                'required' => true,
                'properties' => 
                array (
                  'firstName' => 
                  array (
                    'name' => 'firstName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'John',
                  ),
                  'lastName' => 
                  array (
                    'name' => 'lastName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Doe',
                  ),
                  'companyName' => 
                  array (
                    'name' => 'companyName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ACME Corp.',
                  ),
                  'additionalName' => 
                  array (
                    'name' => 'additionalName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Benelux',
                  ),
                ),
              ),
              'address' => 
              array (
                'name' => 'address',
                'type' => 'object',
                'required' => true,
                'properties' => 
                array (
                  'countryCode' => 
                  array (
                    'name' => 'countryCode',
                    'description' => 'ISO 3166-1 alpha-2 country code',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' => 
                  array (
                    'name' => 'postalCode',
                    'type' => 'string',
                    'required' => false,
                    'example' => '3542AD',
                  ),
                  'city' => 
                  array (
                    'name' => 'city',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Utrecht',
                  ),
                  'street' => 
                  array (
                    'name' => 'street',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Reactorweg',
                  ),
                  'additionalAddressLine' => 
                  array (
                    'name' => 'additionalAddressLine',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Street part 2',
                  ),
                  'number' => 
                  array (
                    'name' => 'number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '25',
                  ),
                  'isBusiness' => 
                  array (
                    'name' => 'isBusiness',
                    'description' => '\'true\' for a business address. \'false\' for a consumer address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'addition' => 
                  array (
                    'name' => 'addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'A',
                  ),
                ),
              ),
              'email' => 
              array (
                'name' => 'email',
                'type' => 'string',
                'required' => false,
                'example' => 'mrparcel@dhlparcel.nl',
              ),
              'phoneNumber' => 
              array (
                'name' => 'phoneNumber',
                'type' => 'string',
                'required' => false,
                'example' => '0031612345678',
              ),
            ),
          ),
          'shipper' => 
          array (
            'name' => 'shipper',
            'description' => 'Shipper details',
            'type' => 'object',
            'required' => true,
            'properties' => 
            array (
              'name' => 
              array (
                'name' => 'name',
                'type' => 'object',
                'required' => true,
                'properties' => 
                array (
                  'firstName' => 
                  array (
                    'name' => 'firstName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'John',
                  ),
                  'lastName' => 
                  array (
                    'name' => 'lastName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Doe',
                  ),
                  'companyName' => 
                  array (
                    'name' => 'companyName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ACME Corp.',
                  ),
                  'additionalName' => 
                  array (
                    'name' => 'additionalName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Benelux',
                  ),
                ),
              ),
              'address' => 
              array (
                'name' => 'address',
                'type' => 'object',
                'required' => true,
                'properties' => 
                array (
                  'countryCode' => 
                  array (
                    'name' => 'countryCode',
                    'description' => 'ISO 3166-1 alpha-2 country code',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' => 
                  array (
                    'name' => 'postalCode',
                    'type' => 'string',
                    'required' => false,
                    'example' => '3542AD',
                  ),
                  'city' => 
                  array (
                    'name' => 'city',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Utrecht',
                  ),
                  'street' => 
                  array (
                    'name' => 'street',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Reactorweg',
                  ),
                  'additionalAddressLine' => 
                  array (
                    'name' => 'additionalAddressLine',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Street part 2',
                  ),
                  'number' => 
                  array (
                    'name' => 'number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '25',
                  ),
                  'isBusiness' => 
                  array (
                    'name' => 'isBusiness',
                    'description' => '\'true\' for a business address. \'false\' for a consumer address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'addition' => 
                  array (
                    'name' => 'addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'A',
                  ),
                ),
              ),
              'email' => 
              array (
                'name' => 'email',
                'type' => 'string',
                'required' => false,
                'example' => 'mrparcel@dhlparcel.nl',
              ),
              'phoneNumber' => 
              array (
                'name' => 'phoneNumber',
                'type' => 'string',
                'required' => false,
                'example' => '0031612345678',
              ),
              'vatNumber' => 
              array (
                'name' => 'vatNumber',
                'type' => 'string',
                'required' => false,
                'example' => 'NL007096100B01',
              ),
              'eori' => 
              array (
                'name' => 'eori',
                'type' => 'string',
                'required' => false,
                'example' => 'Fix me',
              ),
            ),
          ),
          'accountId' => 
          array (
            'name' => 'accountId',
            'description' => 'Account id as provided by DHL. May only be empty for C2C customers.',
            'type' => 'string',
            'required' => true,
            'example' => '01234567',
          ),
          'options' => 
          array (
            'name' => 'options',
            'description' => 'Shipment options for all pieces.',
            'type' => 'array',
            'required' => false,
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'key' => 
                array (
                  'type' => 'string',
                  'example' => 'DOOR',
                  'description' => 'The shipment option key as provided by the capabilities endpoint',
                ),
                'input' => 
                array (
                  'type' => 'string',
                  'description' => 'Optional input for the shipment option',
                ),
              ),
            ),
          ),
          'onBehalfOf' => 
          array (
            'name' => 'onBehalfOf',
            'description' => 'Shipper details when sending on behalf of someone',
            'type' => 'object',
            'required' => false,
            'properties' => 
            array (
              'name' => 
              array (
                'name' => 'name',
                'type' => 'object',
                'required' => true,
                'properties' => 
                array (
                  'firstName' => 
                  array (
                    'name' => 'firstName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'John',
                  ),
                  'lastName' => 
                  array (
                    'name' => 'lastName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Doe',
                  ),
                  'companyName' => 
                  array (
                    'name' => 'companyName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ACME Corp.',
                  ),
                  'additionalName' => 
                  array (
                    'name' => 'additionalName',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Benelux',
                  ),
                ),
              ),
              'address' => 
              array (
                'name' => 'address',
                'type' => 'object',
                'required' => true,
                'properties' => 
                array (
                  'countryCode' => 
                  array (
                    'name' => 'countryCode',
                    'description' => 'ISO 3166-1 alpha-2 country code',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' => 
                  array (
                    'name' => 'postalCode',
                    'type' => 'string',
                    'required' => false,
                    'example' => '3542AD',
                  ),
                  'city' => 
                  array (
                    'name' => 'city',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Utrecht',
                  ),
                  'street' => 
                  array (
                    'name' => 'street',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Reactorweg',
                  ),
                  'additionalAddressLine' => 
                  array (
                    'name' => 'additionalAddressLine',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Street part 2',
                  ),
                  'number' => 
                  array (
                    'name' => 'number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '25',
                  ),
                  'isBusiness' => 
                  array (
                    'name' => 'isBusiness',
                    'description' => '\'true\' for a business address. \'false\' for a consumer address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'addition' => 
                  array (
                    'name' => 'addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'A',
                  ),
                ),
              ),
              'email' => 
              array (
                'name' => 'email',
                'type' => 'string',
                'required' => false,
                'example' => 'mrparcel@dhlparcel.nl',
              ),
              'phoneNumber' => 
              array (
                'name' => 'phoneNumber',
                'type' => 'string',
                'required' => false,
                'example' => '0031612345678',
              ),
              'vatNumber' => 
              array (
                'name' => 'vatNumber',
                'type' => 'string',
                'required' => false,
                'example' => 'NL007096100B01',
              ),
              'eori' => 
              array (
                'name' => 'eori',
                'type' => 'string',
                'required' => false,
                'example' => 'Fix me',
              ),
            ),
          ),
          'returnLabel' => 
          array (
            'name' => 'returnLabel',
            'description' => 'Indicate whether the label should be a return label or not.',
            'type' => 'boolean',
            'required' => false,
            'example' => '',
          ),
          'pieces' => 
          array (
            'name' => 'pieces',
            'type' => 'array',
            'required' => true,
            'items' => 
            array (
              'type' => 'object',
              'required' => 
              array (
                0 => 'parcelType',
                1 => 'quantity',
              ),
              'properties' => 
              array (
                'parcelType' => 
                array (
                  'type' => 'string',
                  'example' => 'SMALL',
                  'description' => 'Parcel type key as provided by the parceltype endpoint',
                ),
                'quantity' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => 1,
                  'description' => 'Number of parcels of this parcel type',
                ),
                'weight' => 
                array (
                  'type' => 'number',
                  'example' => 1,
                  'description' => 'Actual weight of the parcel in kilograms. Maximum weight depends on the parcel type.',
                  'minimum' => 0,
                  'maximum' => 1000,
                  'exclusiveMinimum' => true,
                ),
                'dimensions' => 
                array (
                  'description' => 'Actual dimensions of the parcel, in centimeters. Maximum size depends on the parcel type.',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'length' => 
                    array (
                      'type' => 'number',
                      'example' => 20,
                      'description' => 'Length of the piece in centimeters',
                    ),
                    'width' => 
                    array (
                      'type' => 'number',
                      'example' => 25,
                      'description' => 'Width of the piece in centimeters',
                    ),
                    'height' => 
                    array (
                      'type' => 'number',
                      'example' => 30,
                      'description' => 'Height of the piece in centimeters',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'summary' => 'Create labels for all pieces in the shipment',
  ),
);