<?php
/* @var $this HistoryController */
/* @var $model history */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List history', 'url'=>array('index')),
	array('label'=>'Create history', 'url'=>array('create')),
	array('label'=>'Update history', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete history', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage history', 'url'=>array('admin')),
);
?>

<h1>View history #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'serialnumber_id',
		'sparepart_id',
		'history',
	),
)); ?>
