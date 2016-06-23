<?php
/* @var $this AccountController */
/* @var $model account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List account', 'url'=>array('index')),
	array('label'=>'Create account', 'url'=>array('create')),
	array('label'=>'Update account', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete account', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage account', 'url'=>array('admin')),
);
?>

<h1>View account #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
	),
)); ?>
