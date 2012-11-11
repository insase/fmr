<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>МРЭО Онлайн</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="/js/vendor/modernizr-2.6.1.min.js"></script>
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">Вы используете устаревший браузер. <a href="http://browsehappy.com/">Обновите бразер сейчас</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome Frame</a> для лучшего отображения сайта.</p>
<![endif]-->

<div id="wrapper">
	<header id="header" class="clearfix">
		<a id="logo" href="/"><img src="/images/logo.png" width="46" height="37" alt="МРЭО Онлайн"> МРЭО Онлайн</a>
		<nav id="menu">
			<ul>
				<li><a href="#">Услуги</a></li>
				<li><a href="#">Цены</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</nav>
	</header>

	<?php echo $content; ?>

	<div id="pre-footer" class="clearfix">

		<?php if(Yii::app()->getController()->isMainPage()): ?>
			<a id="all-services-button" href="/services" class="button green">Все услуги <img src="/images/services-arrow.png" width="11" height="23" alt=""></a>
		<?php endif; ?>

		<div id="support-block">
			Если у вас возникли вопросы по работе с сайтом звоните на номер <span id="support-phone">8 800 546-76-76</span><br>
			Или пишите в тех-поддержку на электронную почту <a href="mailto:support@fastmreo.ru">support@fastmreo.ru</a>
		</div>

	</div>

	<footer id="footer">
		Copyright © 2012-2013 Мрэо Онлайн
	</footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

<script src="js/main.js"></script>
</body>
</html>
