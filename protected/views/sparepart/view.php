<?php
/* @var $this SparepartController */
/* @var $model sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List sparepart', 'url'=>array('index')),
	array('label'=>'Create sparepart', 'url'=>array('create')),
	array('label'=>'Update sparepart', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete sparepart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage sparepart', 'url'=>array('admin')),
);
?>

<h1>View sparepart #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'office_id',
		'category',
		'series',
		'type',
		'model',
		'aliasname',
		'partno',
		'status',
	),
)); ?>
