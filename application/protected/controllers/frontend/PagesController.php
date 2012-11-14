<?php

/* Текстовые страницы */

class PagesController extends BaseController
{

	public function actionContacts()
	{
		$this->render('contacts');
	}

	public function actionFaq()
	{
		$this->render('faq');
	}

}