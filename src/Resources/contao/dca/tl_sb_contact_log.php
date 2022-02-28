<?php
$GLOBALS['TL_DCA']['tl_sb_contact_log'] = [
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
        'type' => [
            'sql' => ['type' => 'string', 'length' =>255]
        ],
        'created' => [
            'sql' => ['type' =>'datetime', 'default'=>'CURRENT_TIMESTAMP']
        ],

    ],

];
