<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<? Yii::app()->clientScript->registerCssFile('/frontend/admin/bootstrap/css/bootstrap.min.css'); ?>
	<? Yii::app()->clientScript->registerCssFile('/frontend/admin/bootstrap/css/bootstrap-theme.min.css'); ?>

	<? Yii::app()->clientScript->registerCssFile('/frontend/admin/css/yii_admin.css'); ?>

	<? Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<? Yii::app()->clientScript->registerScriptFile('/frontend/admin/js/selectivizr-min.js'); ?>
	<? Yii::app()->clientScript->registerScriptFile('/frontend/admin/js/library.js'); ?>
	<? Yii::app()->clientScript->registerScriptFile('/frontend/admin/bootstrap/js/bootstrap.min.js'); ?>
	<? Yii::app()->clientScript->registerScriptFile('/frontend/admin/js/admin.js'); ?>
</head>

<body>

	<div id="yii_admin">

		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">

					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/admin" class="navbar-brand"><?= Yii::app()->name ?></a>

				</div>
				<div class="navbar-collapse collapse">

					<ul class="nav navbar-nav">

						<li><a href="/">На сайт</a></li>
						<li class="dropdown">

							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								Управление
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">

								<li>
									<?= CHtml::link('Пользователи', array('/admin/default/users')); ?>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>

						</li>

						<li class="dropdown">

							<? if(!empty($this->menu)): ?>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								Операции
								<b class="caret"></b>
							</a>
							<?php
							$this->widget('zii.widgets.CMenu', array(
								'items' => $this->menu,
								'htmlOptions' => array('class' => 'dropdown-menu'),
							));
							endif?>

						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">

							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<?= Yii::app()->user->name ?> (<?= Yii::app()->user->email ?>)
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">

								<li><a href="/admin/users/default/update/id/<?= Yii::app()->user->id ?>"><i
											class="fa fa-user fa-fw"></i> Профиль <?= Yii::app()->user->name ?></a>
								</li>
								<li>
									<?= CHtml::link('<i class="fa fa-male fa-fw"></i> Пользователи', array('/admin/users/default/admin')); ?>
								</li>
								<li class="divider"></li>
								<li><a href="/admin/common/default/update/id/1"><i class="fa fa-gear fa-fw"></i>
										Настройки</a>
								</li>
								<li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
								</li>
							</ul>

						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">

			<?php echo $content; ?>

		</div>


	</div>


</body>
</html>
