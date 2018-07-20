<?php
/* @var $this OrderdetailController */
/* @var $data Orderdetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderId')); ?>:</b>
	<?php echo CHtml::encode($data->orderId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rockId')); ?>:</b>
	<?php echo CHtml::encode($data->rockId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />


</div>