<?php

$this->breadcrumbs = array(
	Users::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Users::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Users::label(2), 'url' => array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 