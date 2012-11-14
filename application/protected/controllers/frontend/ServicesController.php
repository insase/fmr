<?php

/* Услуги */

class ServicesController extends FrontEndController
{

	public $layout='//layouts/main';

	public function actionIndex()
	{
		$services = Services::model()->findAll();
		$this->render('index', array('services'=>$services));
	}

}