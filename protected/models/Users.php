<?php

Yii::import('application.models._base.BaseUsers');

class Users extends BaseUsers
{
	const ROLE_ADMIN = 'admin';
	const ROLE_MODER = 'moderator';
	const ROLE_USER = 'user';
	const ROLE_BANNED = 'banned';

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->password = CPasswordHelper::hashPassword($this->password);
		return parent::beforeSave();
	}
}