<?php

class DefaultController extends GxController
{
	public $layout = '//layouts/admin/main';

	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions' => array('minicreate', 'create', 'update', 'index', 'view'),
				'roles' => array('moderator'),
			),
			array('allow',
				'actions' => array('admin', 'delete'),
				'roles' => array('admin'),
			),
			array(
				'deny', // deny all users
				'users' => array('*'),
			),
		);
	}

	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Users'),
		));
	}

	public function actionCreate()
	{
		$model = new Users;

		$this->performAjaxValidation($model, 'users-form');

		if (isset($_POST['Users'])) {
			$model->setAttributes($_POST['Users']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array('model' => $model));
	}

	public function actionUpdate($id)
	{
		$model = $this->loadModel($id, 'Users');

		$this->performAjaxValidation($model, 'users-form');

		if (isset($_POST['Users'])) {
			$model->setAttributes($_POST['Users']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	public function actionDelete($id)
	{
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Users')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Users');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model = new Users('search');
		$model->unsetAttributes();

		if (isset($_GET['Users']))
			$model->setAttributes($_GET['Users']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}