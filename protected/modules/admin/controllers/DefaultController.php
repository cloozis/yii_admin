<?php

class DefaultController extends Controller
{
	public $layout = '//layouts/admin/main';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('create', 'update', 'index', 'view'),
				'roles' => array('moderator'),
			),
			array('
			allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'roles' => array('admin'),
			),
			array(
				'deny', // deny all users
				'users' => array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}
}