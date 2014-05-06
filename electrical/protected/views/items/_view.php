<?php
/* @var $this ItemsController */
/* @var $data Items */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_category')); ?>:</b>
	<?php echo CHtml::encode($data->item_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_desc')); ?>:</b>
	<?php echo CHtml::encode($data->item_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reorder_point')); ?>:</b>
	<?php echo CHtml::encode($data->reorder_point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />


</div>