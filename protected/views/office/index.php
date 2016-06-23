<?php
/* @var $this OfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Offices',
);

$this->menu=array(
	array('label'=>'Create office', 'url'=>array('create')),
	array('label'=>'Manage office', 'url'=>array('admin')),
);
?>

<h1>Offices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
