<?php
/* @var $this RockController */
/* @var $model Rock */

//$this->breadcrumbs=array(
//	'Rocks'=>array('index'),
//	$model->id,
//);

//$this->menu=array(
//	array('label'=>'List Rock', 'url'=>array('index')),
//	array('label'=>'Create Rock', 'url'=>array('create')),
//	array('label'=>'Update Rock', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Rock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Rock', 'url'=>array('admin')),
//);
?>


<table>
    <tr>
        <td><b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b></td>
        <td>
	<?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)); ?>
	</td>
    </tr>
    <tr>
	<td><b><?php echo CHtml::encode($model->getAttributeLabel('modelId')); ?>:</b></td>
        <td>
	<?php echo CHtml::encode($model->modelId); ?>
	</td>
    </tr>
    <tr>
	<td><b><?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:</b></td>
        <td>
	<?php echo CHtml::encode($model->description); ?>
	</td>
    </tr>
    <tr>
	<td><b><?php echo CHtml::encode($model->getAttributeLabel('finishedType')); ?>:</b></td>
        <td>
	<?php echo CHtml::encode(Finishedtype::model()->findByPk($model->finishedType)->description); ?>
	</td>
    </tr>
    <tr>
	<td><b><?php echo CHtml::encode($model->getAttributeLabel('thickness')); ?>:</b></td>
        <td>
	<?php echo CHtml::encode(Thickness::model()->findByPk($model->thickness)->description); ?>
	</td>
    </tr>
    <tr>
	<td><b><?php echo CHtml::encode($model->getAttributeLabel('series')); ?>:</b></td>
        <td>
	<?php echo CHtml::encode(Series::model()->findByPk($model->series)->description); ?>
	</td>
    </tr>
    <tr>
	<td><b><?php echo CHtml::encode($model->getAttributeLabel('color')); ?>:</b></td>
        <td>
	<?php echo CHtml::encode(Color::model()->findByPk($model->color)->description); ?>
	</td>
    </tr>
  </table>  
        
        <?php 
            $this->renderPartial('_rock_image', array('data'=>$model));
        ?>
        
        <br /><br />
        <?php 
            $this->renderPartial('_large_rock_image', array('data'=>$model));
        ?>

