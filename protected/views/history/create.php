<?php
/* @var $this HistoryController */
/* @var $model history */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List history', 'url'=>array('index')),
	array('label'=>'Manage history', 'url'=>array('admin')),
);
?>

<h1>Create history</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>