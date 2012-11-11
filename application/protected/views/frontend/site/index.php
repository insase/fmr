<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div id="main-slider">
    <img src="/images/slides/1.jpg" width="940" height="230" alt="Постановка автомобилей на учет без очередей">
</div>

<div id="services-slider">

	<div class="serviced-slide clearfix">

		<?$i = 0; ?>

		<?foreach($services as $item):?>
			<?if($i!=0 && $i%3==0):?>
				</div>
				<div class="serviced-slide clearfix" style="display: none;">
			<?endif?>

			<div class="service-box">
				<h2 class="icon-registration"><?=$item->name;?></h2>
				<p><?=$item->introtext?></p>
				<a href="#" class="button blue">Подать заявку</a>
			</div>

			<?$i++?>

		<?endforeach?>
    </div>

</div>
