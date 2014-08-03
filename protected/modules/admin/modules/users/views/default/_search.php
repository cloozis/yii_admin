<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id', array('maxlength' => 11, 'class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255, 'class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255, 'class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'avatar'); ?>
		<?php echo $form->textField($model, 'avatar', array('maxlength' => 255, 'class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'phone'); ?>
		<?php echo $form->textField($model, 'phone', array('maxlength' => 30, 'class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'role'); ?>
		<?php echo $form->textField($model, 'role', array('maxlength' => 60, 'class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'is_active'); ?>
		<?php echo $form->textField($model, 'is_active', array('class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'rememberMe'); ?>
		<?php echo $form->textField($model, 'rememberMe', array('class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'dateCreate'); ?>
		<?php echo $form->textField($model, 'dateCreate', array('class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'dateChange'); ?>
		<?php echo $form->textField($model, 'dateChange', array('class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model, 'dateLastLogin'); ?>
		<?php echo $form->textField($model, 'dateLastLogin', array('class' => 'form-control roboForm_field')); ?>
	</div>

	<div class="buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search'), array('class' => 'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
