<?php
/* @var $this OfficeController */
/* @var $model office */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List office', 'url'=>array('index')),
	array('label'=>'Create office', 'url'=>array('create')),
	array('label'=>'Update office', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete office', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage office', 'url'=>array('admin')),
);
?>

<h1>View office #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'account_id',
		'name_office',
		'email_office',
		'address_office',
		'phone_office',
	),
)); ?>
