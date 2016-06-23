<?php
/* @var $this HistoryController */
/* @var $model history */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'serialnumber_id'); ?>
		<?php echo $form->textField($model,'serialnumber_id'); ?>
		<?php echo $form->error($model,'serialnumber_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sparepart_id'); ?>
		<?php echo $form->textField($model,'sparepart_id'); ?>
		<?php echo $form->error($model,'sparepart_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history'); ?>
		<?php echo $form->textField($model,'history',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'history'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->