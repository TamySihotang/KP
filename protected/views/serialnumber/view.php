<?php
/* @var $this SerialnumberController */
/* @var $model serialnumber */

$this->breadcrumbs=array(
	'Serialnumbers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List serialnumber', 'url'=>array('viewSpare')),
	array('label'=>'Create serialnumber', 'url'=>array('addSparepart')),
	array('label'=>'Update serialnumber', 'url'=>array('updateSparepart', 'id'=>$model->id)),
	array('label'=>'Delete serialnumber', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage serialnumber', 'url'=>array('admin')),
);
?>

<h1>View serialnumber #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sparepart_id',
		'serial_number',
	),
)); ?>
