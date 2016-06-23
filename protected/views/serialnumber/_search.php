<?php
/* @var $this SerialnumberController */
/* @var $model serialnumber */
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
		<?php echo $form->label($model,'sparepart_id'); ?>
		<?php echo $form->textField($model,'sparepart_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial_number'); ?>
		<?php echo $form->textField($model,'serial_number',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->