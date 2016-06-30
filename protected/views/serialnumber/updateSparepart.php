<?php
/* @var $this SerialnumberController */
/* @var $model serialnumber */

$this->breadcrumbs=array(
	'Serialnumbers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List serialnumber', 'url'=>array('index')),
	array('label'=>'Create serialnumber', 'url'=>array('create')),
	array('label'=>'View serialnumber', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage serialnumber', 'url'=>array('admin')),
);
?>

<h1>Update serialnumber <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_formUpdateSpare', array('model'=>$model)); ?>