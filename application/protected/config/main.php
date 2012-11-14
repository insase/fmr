<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'МРЭО Онлайн',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(

	),

	// application components
	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
			'class' => 'WebUser',
			'loginUrl'=>array('/login'),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fastmreo',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '12345',
			'charset' => 'utf8',
		),
		'authManager' => array(
			'class' => 'CPhpAuthManager',
		),
		//'errorHandler'=>array(
		// use 'site/error' action to display errors
		//'errorAction'=>'site/error',
		//),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
	'behaviors'=>array(
		'runEnd'=>array(
			'class'=>'application.behaviors.WebApplicationEndBehavior',
		),
	),
);