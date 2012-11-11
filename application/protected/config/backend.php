<?php

return CMap::mergeArray(

    require_once(dirname(__FILE__).'/main.php'),

    array(
        'defaultController' => 'site',
        'components'=>array(
            'urlManager'=>array(
                'showScriptName'=>false,
                'urlFormat'=>'path',
                'rules'=>array(
                    'backend'=>'site/index',
                    'backend/<_c>'=>'<_c>/index',
                    'backend/<_c>/<_a>'=>'<_c>/<_a>',
                ),
            ),
        ),
    )
);