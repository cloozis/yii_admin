<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'users-form',
	'enableAjaxValidation' => true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model, 'avatar', array('maxlength' => 255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'avatar'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model, 'phone', array('maxlength' => 30, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'phone'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model, 'role', array('maxlength' => 60, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'role'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model, 'is_active', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'is_active'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'rememberMe'); ?>
		<?php echo $form->textField($model, 'rememberMe', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'dateCreate'); ?>
		<?php echo $form->textField($model, 'dateCreate', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'dateCreate'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'dateChange'); ?>
		<?php echo $form->textField($model, 'dateChange', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'dateChange'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'dateLastLogin'); ?>
		<?php echo $form->textField($model, 'dateLastLogin', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'dateLastLogin'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'), array('class' => 'btn btn-default'));
$this->endWidget();
?>
</div><!-- form -->