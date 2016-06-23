<?php
/* @var $this AccountController */
/* @var $model account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List account', 'url'=>array('index')),
	array('label'=>'Create account', 'url'=>array('create')),
	array('label'=>'View account', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage account', 'url'=>array('admin')),
);
?>

<h1>Update account <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>