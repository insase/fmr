<?php
/**
 * Модель Services
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $create_time
 */
class User extends CActiveRecord
{

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'user';
	}

}