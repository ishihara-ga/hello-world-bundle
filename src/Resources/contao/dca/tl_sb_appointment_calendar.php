<?php

$GLOBALS['TL_DCA']['tl_sb_appointment_calendar'] = [
    'config' => [
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'sql' => [
            'keys' => [
                'id' => 'primary',
            ],
        ],
    ],
    'fields' => [
        'id' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'autoincrement' => true],
        ],
        'name' =>[
            'sql' => ['type' => 'string', 'length'=>255],
        ],
        'contact' => [
            'foreignKey'=> 'tl_sb_content_contact.id',
            'sql' => ['type' => 'integer', 'unsigned' => true, 'notnull' => true],
            'relation' =>['type'=>'belongsTo', 'load'=>'lazy']
          ],
        
          'created' =>[
            'sql' =>['type' => 'datetime', 'default'=>'CURRENT_TIMESTAMP']
        ],          
    ],
];
