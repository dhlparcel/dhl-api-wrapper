<?php
return array (
  'findLabels' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/labels',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'trackerCodeFilter' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
      'orderReferenceFilter' => 
      array (
        'type' => 'string',
        'required' => false,
        'location' => 'query',
      ),
    ),
    'summary' => 'Find labels and filter by tracker code or order reference',
  ),
);