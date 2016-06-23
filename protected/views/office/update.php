<?php
/* @var $this OfficeController */
/* @var $model office */

$this->breadcrumbs=array(
	'Offices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List office', 'url'=>array('index')),
	array('label'=>'Create office', 'url'=>array('create')),
	array('label'=>'View office', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage office', 'url'=>array('admin')),
);
?>

<h1>Update office <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>