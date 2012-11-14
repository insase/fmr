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
					//текстовые страницы
					'<_a:(contacts|faq)>'=>'/pages/<_a>',
					//роутинг для контроллеров
					'<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),
			),
		),
	)
);