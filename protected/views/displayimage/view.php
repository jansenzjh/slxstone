<?php
/* @var $this DisplayimageController */
/* @var $model Displayimage */

$this->breadcrumbs=array(
	'Displayimages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Displayimage', 'url'=>array('index')),
	array('label'=>'Create Displayimage', 'url'=>array('create')),
	array('label'=>'Update Displayimage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Displayimage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Displayimage', 'url'=>array('admin')),
);
?>

<h1>View Displayimage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'path',
	),
)); ?>
