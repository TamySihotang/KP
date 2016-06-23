<?php
/* @var $this SparepartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spareparts',
);

$this->menu=array(
	array('label'=>'Create sparepart', 'url'=>array('create')),
	array('label'=>'Manage sparepart', 'url'=>array('admin')),
);
?>

<h1>Spareparts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
