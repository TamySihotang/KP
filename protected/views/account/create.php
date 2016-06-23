<?php
/* @var $this AccountController */
/* @var $model account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List account', 'url'=>array('index')),
	array('label'=>'Manage account', 'url'=>array('admin')),
);
?>

<h1>Create account</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>