<?php
/* @var $this SparepartController */
/* @var $model sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List sparepart', 'url'=>array('index')),
	array('label'=>'Create sparepart', 'url'=>array('create')),
	array('label'=>'View sparepart', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage sparepart', 'url'=>array('admin')),
);
?>

<h1>Update sparepart <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>