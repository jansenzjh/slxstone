<?php
/* @var $this FinishedtypeController */
/* @var $model Finishedtype */

$this->breadcrumbs=array(
	'Finishedtypes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Finishedtype', 'url'=>array('index')),
	array('label'=>'Create Finishedtype', 'url'=>array('create')),
	array('label'=>'Update Finishedtype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Finishedtype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Finishedtype', 'url'=>array('admin')),
);
?>

<h1>View Finishedtype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
