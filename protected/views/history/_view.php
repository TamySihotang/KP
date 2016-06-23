<?php
/* @var $this HistoryController */
/* @var $data history */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serialnumber_id')); ?>:</b>
	<?php echo CHtml::encode($data->serialnumber_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sparepart_id')); ?>:</b>
	<?php echo CHtml::encode($data->sparepart_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('history')); ?>:</b>
	<?php echo CHtml::encode($data->history); ?>
	<br />


</div>