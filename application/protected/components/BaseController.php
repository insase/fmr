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

}