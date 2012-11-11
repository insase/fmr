<?php

return CMap::mergeArray(

    require_once(dirname(__FILE__).'/main.php'),

    array(
        'defaultController' => 'site',
        'components'=>array(
            'urlManager'=>array(
                'showScriptName'=>false,
                'urlFormat'=>'path',
                'caseSensitive' => false,
                'rules'=>array(
                    'login'=>'/user/login',
                    'signup'=>'/user/signup',
                    'logout'=>'/user/logout',
                    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                ),
            ),
        ),
    )
);