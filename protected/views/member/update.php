<?php
/* @var $this MemberController */
/* @var $model member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List member', 'url'=>array('index')),
	array('label'=>'Create member', 'url'=>array('create')),
	array('label'=>'View member', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage member', 'url'=>array('admin')),
);
?>

<h1>Update member <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>