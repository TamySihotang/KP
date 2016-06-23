<?php
/* @var $this MemberController */
/* @var $model member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List member', 'url'=>array('index')),
	array('label'=>'Create member', 'url'=>array('create')),
	array('label'=>'Update member', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete member', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage member', 'url'=>array('admin')),
);
?>

<h1>View member #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'account_id',
		'name',
	),
)); ?>
