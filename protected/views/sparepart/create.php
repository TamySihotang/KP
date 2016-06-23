<?php
/* @var $this SparepartController */
/* @var $model sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List sparepart', 'url'=>array('index')),
	array('label'=>'Manage sparepart', 'url'=>array('admin')),
);
?>

<h1>Create sparepart</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>