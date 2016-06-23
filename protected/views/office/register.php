<?php
//$this->pageTitle = Yii::app()->name_office . ' - Register';
$this->breadcrumbs = array(
'Register',
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
<?php echo $form->labelEx($model, 'name_office'); ?>
<?php echo $form->textField($model, 'name_office'); ?>
<?php echo $form->error($model, 'name_office'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'email_office'); ?>
<?php echo $form->textField($model, 'email_office'); ?> 
    <?php echo $form->error($model, 'email_office'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'address_office'); ?>
<?php echo $form->textField($model, 'address_office'); ?>
<?php echo $form->error($model, 'address_office'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'phone_office'); ?>
<?php echo $form->textField($model, 'phone_office'); ?>
<?php echo $form->error($model, 'phone_office'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'username'); ?>
<?php echo $form->textField($model, 'username'); ?>
<?php echo $form->error($model, 'username'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password'); ?>
<?php echo $form->error($model, 'password'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model, 'repassword'); ?>
<?php echo $form->passwordField($model, 'repassword'); ?>
<?php echo $form->error($model, 'repassword'); ?>
</div>
<div class="row buttons">
<?php echo CHtml::submitButton('Register'); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->