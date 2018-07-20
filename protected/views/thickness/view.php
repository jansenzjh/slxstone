<?php
/* @var $this ThicknessController */
/* @var $model Thickness */

$this->breadcrumbs=array(
	'Thicknesses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Thickness', 'url'=>array('index')),
	array('label'=>'Create Thickness', 'url'=>array('create')),
	array('label'=>'Update Thickness', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Thickness', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Thickness', 'url'=>array('admin')),
);
?>

<h1>View Thickness #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
