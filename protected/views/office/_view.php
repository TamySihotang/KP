<?php
/* @var $this OfficeController */
/* @var $data office */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_id')); ?>:</b>
	<?php echo CHtml::encode($data->account_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_office')); ?>:</b>
	<?php echo CHtml::encode($data->name_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_office')); ?>:</b>
	<?php echo CHtml::encode($data->email_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_office')); ?>:</b>
	<?php echo CHtml::encode($data->address_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_office')); ?>:</b>
	<?php echo CHtml::encode($data->phone_office); ?>
	<br />


</div>