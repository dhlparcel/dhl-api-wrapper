<?php
return array (
  'getTrackAndTrace' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/track-trace',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'key' => 
      array (
        'description' => 'Comma separated list of keyparts. A keypart has the following format: barcode+postalcode. Querying with a single barcode is also possible; in which case the API returns a reduced set of information for this piece (containing just the barcode, the list of events and any of the derived fields which can be populated based on the event data, such as the \'plannedDeliveryTimeframe\' and \'deliveredAt\' fields).',
        'type' => 'array',
        'location' => 'query',
        'items' => 
        array (
          'type' => 'string',
        ),
      ),
      'role' => 
      array (
        'location' => 'query',
      ),
    ),
    'summary' => 'Track and Trace',
  ),
);