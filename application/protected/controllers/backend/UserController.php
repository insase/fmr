<?php

class UserController extends BackEndController
{
	var $defaultAction = 'index';
	public $layout = '//layouts/main';

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Service', array(
			'pagination'=>array(
				'pageSize'=>50,
			),
		));

		$this->render('index', array('dataProvider'=>$dataProvider));
	}

}