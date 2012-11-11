<?php

class BackEndController extends BaseController
{

	public $layout = 'site';

	public $menu = array();

	public $breadcrumbs = array();

	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function init() {
		parent::init();
		if(!Yii::app()->user->checkAccess('admin')) {
			//TODO: сделать аналог 404 на сайте
			throw new CHttpException(404,'Доступ запрещен');
		}
	}

	public function accessRules()
	{
		return array(
			array(
				'allow',
				'roles'=>array('admin'),
			),
			array(
				'deny',
				'users'=>array('*'),
			),
		);
	}
}