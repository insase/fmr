<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle='Произошла ошибка';
$this->breadcrumbs=array(
	'Ошибка',
);
?>
<h1>Ошибка <?php echo $code; ?></h1>
<p><?php echo CHtml::encode($message); ?></p>
