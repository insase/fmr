<?php
//Функция отладки:
function dump($var, $depth = 5) {
	echo '<div style="clear: both; font-size: 12px; color: #333333; font-family: monospace; text-align: left;">';
	echo '<div style="background: #fefdea; padding: 7px; border: 1px solid #d7d6ba; margin:7px 7px 7px 7px; overflow: auto;">';
	CVarDumper::dump($var, $depth, true);
	echo '</div></div>';
}
// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/frontend.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->runEnd('frontend');
