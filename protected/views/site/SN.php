<?php
$this->pageTitle = Yii::app() ->name . ' -SN';
$this->breadcrumbs = array(
 'SN',
);
?>
<h1>Serial Number</h1>

<! -- form -->
<div class="form">
 <?php
 $form = $this->beginWidget('CActiveForm', array(
 'id' => 'sn-form',
 'enableAjaxValidation' => false,
 ));
 ?>
 <p class="note">Fields with <span class="required">*</span> are
required.</p>
 <?php echo $form->errorSummary($model); ?>

 <div class="row">
 <?php echo $form->labelEx($model, 'sparepart_id'); ?>
 <?php echo $form->textField($model, 'sparepart_id'); ?>
 <?php echo $form->error($model, 'sparepart_id'); ?>
 </div>
 
 <div class="row">
 <?php echo $form->labelEx($model, 'serial'); ?>
 <?php echo $form->textField($model, 'serial'); ?>
 <?php echo $form->error($model, 'serial'); ?>
 </div>
 
 <div class="row buttons">
 <?php echo CHtml::submitButton('Create'); ?>
 </div>
 


 <?php $this->endWidget(); ?>
</div><! -- form -->
