<?php
/* @var $this SerialnumberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serialnumbers',
);

$this->menu=array(
	array('label'=>'Create serialnumber', 'url'=>array('create')),
	array('label'=>'Manage serialnumber', 'url'=>array('admin')),
);
?>

<h1>Serialnumbers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewSpare',
)); ?>
