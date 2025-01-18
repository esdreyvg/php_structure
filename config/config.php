<?php
//Include All Configures
return [
    'database'=> require __DIR__.'/database.php',
    'email'=> require __DIR__.'/email.php',
    'logging'=> require __DIR__.'/logging.php',
    'settings'=>[
        'displayErrorDetails'=>true,
        'timezone'=>'UTC'
    ]
];