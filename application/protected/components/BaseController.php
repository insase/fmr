<?php

class BaseController extends CController
{

	// флеш-нотис
	public function successNotice($message)
	{
		return Yii::app()->user->setFlash('success', $message);
	}

	// флеш-ошибка
	public function errorNotice($message)
	{
		return Yii::app()->user->setFlash('error', $message);
	}

	// определение главной страницы
	public function isMainPage() {
		if(Yii::app()->controller->createUrl('')==='/site/index') {
			return true;
		}
		return false;
	}

}