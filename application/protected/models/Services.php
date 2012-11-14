<?php
/**
 * Модель Services
 *
 * @property integer $id
 * @property string $name
 * @property string $introtext
 * @property string $description
 * @property float $price
 * @property string $create_time
 */
class Services extends CActiveRecord
{

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'service';
	}

}