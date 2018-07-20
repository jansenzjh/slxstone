<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderDetailID')); ?>:</b>
	<?php echo CHtml::encode($data->orderDetailID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactID')); ?>:</b>
	<?php echo CHtml::encode($data->contactID); ?>
	<br />


</div>