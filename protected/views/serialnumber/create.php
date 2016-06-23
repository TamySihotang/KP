<?php
/* @var $this SerialnumberController */
/* @var $model serialnumber */

$this->breadcrumbs=array(
	'Serialnumbers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List serialnumber', 'url'=>array('index')),
	array('label'=>'Manage serialnumber', 'url'=>array('admin')),
);
?>

<h1>Create serialnumber</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>