<?php
return array (
  'getProformaInvoice' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/shipments/{id}/proforma',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'id' => 
      array (
        'type' => 'string',
        'required' => true,
        'location' => 'uri',
        'format' => 'uuid',
      ),
    ),
    'summary' => NULL,
  ),
);