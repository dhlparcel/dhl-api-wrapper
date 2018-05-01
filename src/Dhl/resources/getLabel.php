<?php
return array(
    'getLabel' =>
        array(
            'httpMethod' => 'GET',
            'uri' => '/labels/{id}',
            'responseModel' => 'getResponse',
            'parameters' =>
                array(
                    'id' =>
                        array(
                            'type' => 'string',
                            'required' => true,
                            'location' => 'uri',
                            'format' => 'uuid',
                        ),
                ),
            'summary' => 'Get label data',
        ),
);