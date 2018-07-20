<?php
/* @var $this DisplayimageController */
/* @var $data Displayimage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
        <?php $image = CHtml::image(Yii::app()->baseUrl . '/uploads/display/'.$data->path);?>
        <?php echo CHtml::link($image,CHtml::image(Yii::app()->baseUrl . '/uploads/display'.$data->path));
        ?>
        <br />
</div>