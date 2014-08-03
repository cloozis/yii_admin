<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->email), array('view', 'id' => $data->email)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('avatar')); ?>:
	<?php echo GxHtml::encode($data->avatar); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('role')); ?>:
	<?php echo GxHtml::encode($data->role); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_active')); ?>:
	<?php echo GxHtml::encode($data->is_active); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('rememberMe')); ?>:
	<?php echo GxHtml::encode($data->rememberMe); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dateCreate')); ?>:
	<?php echo GxHtml::encode($data->dateCreate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dateChange')); ?>:
	<?php echo GxHtml::encode($data->dateChange); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dateLastLogin')); ?>:
	<?php echo GxHtml::encode($data->dateLastLogin); ?>
	<br />
	*/ ?>

</div>