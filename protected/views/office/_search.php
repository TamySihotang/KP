<?php
/* @var $this OfficeController */
/* @var $model office */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_id'); ?>
		<?php echo $form->textField($model,'account_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_office'); ?>
		<?php echo $form->textField($model,'name_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_office'); ?>
		<?php echo $form->textField($model,'email_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address_office'); ?>
		<?php echo $form->textField($model,'address_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_office'); ?>
		<?php echo $form->textField($model,'phone_office',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->