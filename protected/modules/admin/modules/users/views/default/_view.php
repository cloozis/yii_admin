<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('avatar')); ?>:
	<?php echo GxHtml::encode($data->avatar); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('phone')); ?>:
	<?php echo GxHtml::encode($data->phone); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('role')); ?>:
	<?php echo GxHtml::encode($data->role); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('is_active')); ?>:
	<?php echo GxHtml::encode($data->is_active); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rememberMe')); ?>:
	<?php echo GxHtml::encode($data->rememberMe); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dateCreate')); ?>:
	<?php echo GxHtml::encode($data->dateCreate); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('dateChange')); ?>:
	<?php echo GxHtml::encode($data->dateChange); ?>
	<br />
	*/ ?>

</div>