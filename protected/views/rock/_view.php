<?php
/* @var $this RockController */
/* @var $data Rock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelId')); ?>:</b>
	<?php echo CHtml::encode($data->modelId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finishedType')); ?>:</b>
	<?php echo CHtml::encode(Finishedtype::model()->findByPk($data->finishedType)->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thickness')); ?>:</b>
	<?php echo CHtml::encode(Thickness::model()->findByPk($data->thickness)->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series')); ?>:</b>
	<?php echo CHtml::encode(Series::model()->findByPk($data->series)->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode(Color::model()->findByPk($data->color)->description); ?>
	<br />

        
        <?php 
            $this->renderPartial('_rock_image', array('data'=>$data));
        ?>
        <br />
        <?php 
            $this->renderPartial('_large_rock_image', array('data'=>$data));
        ?>
        <br />
</div>