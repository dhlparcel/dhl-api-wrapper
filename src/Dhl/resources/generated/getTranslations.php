<?php
return array (
  'getTranslations' => 
  array (
    'httpMethod' => 'GET',
    'uri' => '/translations/{translation_file}',
    'responseModel' => 'getResponse',
    'parameters' => 
    array (
      'translation_file' => 
      array (
        'description' => 'Translation file name',
        'type' => 'string',
        'enum' => 
        array (
          0 => 'en_BE.json',
          1 => 'en_ES.json',
          2 => 'en_NL.json',
          3 => 'en_PT.json',
          4 => 'es_ES.json',
          5 => 'fr_BE.json',
          6 => 'nl_BE.json',
          7 => 'nl_NL.json',
          8 => 'pt_PT.json',
        ),
        'location' => 'uri',
      ),
    ),
    'summary' => 'Key translations',
  ),
);