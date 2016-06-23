<?php
/* @var $this OfficeController */
/* @var $model office */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List office', 'url'=>array('index')),
	array('label'=>'Manage office', 'url'=>array('admin')),
);
?>

<h1>Create office</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>