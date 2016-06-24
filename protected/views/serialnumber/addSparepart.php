<?php
//$this->pageTitle = Yii::app()->name_office . ' - Register';
$this->breadcrumbs = array(
'Add Sparepart',
);
?>
<h1>Register</h1>
<p>Please fill out the following form to register:</p>
<!-- form -->
<div class="form">
<?php
$form = $this->beginWidget('CActiveForm', array(
'id' => 'registration-form',
'enableAjaxValidation' => false,
));
?>
<p class="note">Fields with <span class="required">*</span> are 
required.</p>
<?php echo $form->errorSummary($model); ?>
<div class="row">
<?php echo $form->labelEx($model, 'category'); ?>
<?php echo $form->textField($model, 'category'); ?>
<?php echo $form->error($model, 'category'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'series'); ?>
<?php echo $form->textField($model, 'series'); ?> 
    <?php echo $form->error($model, 'series'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'type'); ?>
<?php echo $form->textField($model, 'type'); ?>
<?php echo $form->error($model, 'type'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'model'); ?>
<?php echo $form->textField($model, 'model'); ?>
<?php echo $form->error($model, 'model'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'aliasname'); ?>
<?php echo $form->textField($model, 'aliasname'); ?>
<?php echo $form->error($model, 'aliasname'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'partno'); ?>
<?php echo $form->textField($model, 'partno'); ?>
<?php echo $form->error($model, 'partno'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'status'); ?>
<?php echo $form->textField($model, 'status'); ?>
<?php echo $form->error($model, 'status'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'serial_number'); ?>
<?php echo $form->textField($model, 'serial_number'); ?>
<?php echo $form->error($model, 'serial_number'); ?>
</div>
<div class="row buttons">
<?php echo CHtml::submitButton('Add'); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->