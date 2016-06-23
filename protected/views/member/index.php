<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Members',
);

$this->menu=array(
	array('label'=>'Create member', 'url'=>array('create')),
	array('label'=>'Manage member', 'url'=>array('admin')),
);
?>

<h1>Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
