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
        'description' => 'One or more keys to search on, comma separated. A key has the following format: \'trackingKey+postalcode\' or just \'trackingKey\', where trackingKey must be a barcode, airwayBillNumber of shipmentNumber. When querying with a single trackingKey the API will return a reduced set of information for this piece (containing just the barcode, the list of events and any of the derived fields which can be populated based on the event data, such as the \'plannedDeliveryTimeframe\' and \'deliveredAt\' fields).',
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