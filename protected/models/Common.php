<?php

Yii::import('application.models._base.BaseCommon');

class Common extends BaseCommon
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}