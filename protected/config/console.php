<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*',
	),

	// application components
	'components'=>array(
		'authManager' => array(
			'class' => 'CDbAuthManager',
			'connectionID' => 'db',
		),

		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_admin',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'toor',
			'charset' => 'utf8',

			/*'itemTable' => 'AuthItem',
			'itemChildTable' => 'AuthItemChild',
			'assignmentTable' => 'AuthAssignment',*/
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
);