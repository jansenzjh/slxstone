<?php
/* @var $this ArtwareController */
/* @var $model Artware */

$this->breadcrumbs=array(
	'Artwares'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Artware', 'url'=>array('index')),
	array('label'=>'Create Artware', 'url'=>array('create')),
	array('label'=>'Update Artware', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Artware', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artware', 'url'=>array('admin')),
);
?>

<h1>View Artware #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'path',
	),
)); ?>
