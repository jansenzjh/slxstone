<?php
/* @var $this RockController */
/* @var $data Rock */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('modelId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->modelId), array('rock/view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series')); ?>:</b><br>
	<?php echo CHtml::encode(Series::model()->findByPk($data->series)->description); ?>
	<br />
        
        <?php 
            $this->renderPartial('application.views.rock._rock_image', array('data'=>$data));
        ?>
        <br />
</div>