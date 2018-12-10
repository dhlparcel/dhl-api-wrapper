<?php
return array (
  'create' => 
  array (
    'httpMethod' => 'POST',
    'uri' => '/pickup-requests',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'body' => 
      array (
        'description' => 'Create a pickup request',
        'type' => 'object',
        'required' => true,
        'location' => 'body',
        'properties' => 
        array (
          'accountId' => 
          array (
            'name' => 'accountId',
            'description' => 'Customer account id. Depending on country the account id might have a different format.',
            'type' => 'string',
            'required' => false,
            'example' => '12345678',
          ),
          'pickupDate' => 
          array (
            'name' => 'pickupDate',
            'description' => 'Pickup date. Format: yyyy-MM-dd',
            'type' => 'string',
            'required' => false,
            'example' => '2018-06-04',
          ),
          'description' => 
          array (
            'name' => 'description',
            'description' => 'Optional description.',
            'type' => 'string',
            'required' => false,
          ),
          'pickupLocation' => 
          array (
            'name' => 'pickupLocation',
            'description' => 'Optional pickup location. Only for Iberia.',
            'type' => 'string',
            'required' => false,
          ),
          'numberOfPackages' => 
          array (
            'name' => 'numberOfPackages',
            'description' => 'Number of packages requested to pickup. Either this or numberOfPallets must be provided.',
            'type' => 'integer',
            'required' => false,
            'format' => 'int32',
            'example' => '1',
          ),
          'numberOfPallets' => 
          array (
            'name' => 'numberOfPallets',
            'description' => 'Number of pallets requested to pickup. Either this or numberOfPackages must be provided.',
            'type' => 'integer',
            'required' => false,
            'format' => 'int32',
            'example' => '0',
          ),
          'totalWeight' => 
          array (
            'name' => 'totalWeight',
            'description' => 'Optional total weight of the packages to be picked up.',
            'type' => 'integer',
            'required' => false,
            'format' => 'int32',
            'example' => '2',
          ),
          'shipper' => 
          array (
            'name' => 'shipper',
            'description' => 'Shipper information.',
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
                    'description' => 'First name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                  'lastName' => 
                  array (
                    'name' => 'lastName',
                    'description' => 'Last name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                  'companyName' => 
                  array (
                    'name' => 'companyName',
                    'description' => 'Company name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                  'additionalName' => 
                  array (
                    'name' => 'additionalName',
                    'description' => 'Additional name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                ),
              ),
              'email' => 
              array (
                'name' => 'email',
                'description' => 'Optional email address. Only for Iberia.',
                'type' => 'object',
                'required' => false,
                'properties' => 
                array (
                  'address' => 
                  array (
                    'name' => 'address',
                    'description' => 'Email address.',
                    'type' => 'string',
                    'required' => false,
                  ),
                ),
              ),
              'phoneNumber' => 
              array (
                'name' => 'phoneNumber',
                'description' => 'Optional phone number.',
                'type' => 'string',
                'required' => false,
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
                    'description' => 'Country code. Format: 2 chararcters (ISO-3166-1)',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' => 
                  array (
                    'name' => 'postalCode',
                    'description' => 'Postal code',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1000AA',
                  ),
                  'city' => 
                  array (
                    'name' => 'city',
                    'description' => 'City name',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Amsterdam',
                  ),
                  'street' => 
                  array (
                    'name' => 'street',
                    'description' => 'Street name',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Kalverstraat',
                  ),
                  'number' => 
                  array (
                    'name' => 'number',
                    'description' => 'House number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '10',
                  ),
                  'addition' => 
                  array (
                    'name' => 'addition',
                    'description' => 'House number addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'B',
                  ),
                  'isBusiness' => 
                  array (
                    'name' => 'isBusiness',
                    'description' => 'Whether the address is a business address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'additionalInfo' => 
                  array (
                    'name' => 'additionalInfo',
                    'description' => 'Optional additional address info',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2nd Floor, 1st door on right.',
                  ),
                ),
              ),
            ),
          ),
          'receiver' => 
          array (
            'name' => 'receiver',
            'description' => 'Receiver information.',
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
                    'description' => 'First name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                  'lastName' => 
                  array (
                    'name' => 'lastName',
                    'description' => 'Last name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                  'companyName' => 
                  array (
                    'name' => 'companyName',
                    'description' => 'Company name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                  'additionalName' => 
                  array (
                    'name' => 'additionalName',
                    'description' => 'Additional name of contact.',
                    'type' => 'string',
                    'required' => false,
                  ),
                ),
              ),
              'email' => 
              array (
                'name' => 'email',
                'description' => 'Optional email address. Only for Iberia.',
                'type' => 'object',
                'required' => false,
                'properties' => 
                array (
                  'address' => 
                  array (
                    'name' => 'address',
                    'description' => 'Email address.',
                    'type' => 'string',
                    'required' => false,
                  ),
                ),
              ),
              'phoneNumber' => 
              array (
                'name' => 'phoneNumber',
                'description' => 'Optional phone number.',
                'type' => 'string',
                'required' => false,
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
                    'description' => 'Country code. Format: 2 chararcters (ISO-3166-1)',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'NL',
                  ),
                  'postalCode' => 
                  array (
                    'name' => 'postalCode',
                    'description' => 'Postal code',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1000AA',
                  ),
                  'city' => 
                  array (
                    'name' => 'city',
                    'description' => 'City name',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Amsterdam',
                  ),
                  'street' => 
                  array (
                    'name' => 'street',
                    'description' => 'Street name',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Kalverstraat',
                  ),
                  'number' => 
                  array (
                    'name' => 'number',
                    'description' => 'House number',
                    'type' => 'string',
                    'required' => false,
                    'example' => '10',
                  ),
                  'addition' => 
                  array (
                    'name' => 'addition',
                    'description' => 'House number addition',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'B',
                  ),
                  'isBusiness' => 
                  array (
                    'name' => 'isBusiness',
                    'description' => 'Whether the address is a business address',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => '1',
                  ),
                  'additionalInfo' => 
                  array (
                    'name' => 'additionalInfo',
                    'description' => 'Optional additional address info',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2nd Floor, 1st door on right.',
                  ),
                ),
              ),
            ),
          ),
          'timeSlot' => 
          array (
            'name' => 'timeSlot',
            'description' => 'Time slot in which to pickup the package(s). Only for Iberia.',
            'type' => 'object',
            'required' => false,
            'properties' => 
            array (
              'from' => 
              array (
                'name' => 'from',
                'description' => 'Pickup \'from\' time. Format: HH:mm',
                'type' => 'string',
                'required' => false,
                'example' => '10:15',
              ),
              'to' => 
              array (
                'name' => 'to',
                'description' => 'Pickup \'to\' time. Format: HH:mm',
                'type' => 'string',
                'required' => false,
                'example' => '16:30',
              ),
            ),
          ),
          'type' => 
          array (
            'name' => 'type',
            'description' => 'Request type. Currently only supported: \'Once\'.',
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'Once',
            ),
            'example' => 'Once',
          ),
          'provideLabels' => 
          array (
            'name' => 'provideLabels',
            'description' => 'Whether the labels should be provided by DHL.',
            'type' => 'boolean',
            'required' => false,
            'example' => '',
          ),
        ),
      ),
    ),
    'summary' => 'Create a pickup request',
  ),
);