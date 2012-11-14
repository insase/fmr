<?php
/* @var $this ServicesController */
/* @var $model Service */
/* @var $services CActiveRecord  */
?>

<?php foreach($services as $item): ?>
<h2><?php echo $item->name; ?></h2>
<div class="service-description"><?php echo $item->introtext; ?></div>
<div class="service-price"><?php echo $item->price; ?></div>
<?php endforeach; ?>