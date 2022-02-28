<?php

$GLOBALS['TL_DCA']['tl_sb_appointment_event'] = [
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
        'calendar'=>[
            'foreignKey'=> 'tl_sb_appointment.id',
            'sql' => ['type' => 'integer', 'unsigned' => true],
            'relation' =>['type'=>'belongsTo', 'load'=>'lazy']
          ],        

          'date'=>[
            'sql' =>['type' =>'date'],
          ],
          'startTime'=>[
            'sql' =>['type' =>'time'],
          ],     
          'endTime'=>[
            'sql' =>['type' =>'time'],
          ],                    
        'status'=>[
            'sql' => ['type' => 'string', 'length'=>255]
          ],        
        
    ],
];