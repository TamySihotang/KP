<?php
/* @var $this HistoryController */
/* @var $model history */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List history', 'url'=>array('index')),
	array('label'=>'Create history', 'url'=>array('create')),
	array('label'=>'View history', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage history', 'url'=>array('admin')),
);
?>

<h1>Update history <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>