<?php
/* @var $this MemberController */
/* @var $model member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List member', 'url'=>array('index')),
	array('label'=>'Manage member', 'url'=>array('admin')),
);
?>

<h1>Create member</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>