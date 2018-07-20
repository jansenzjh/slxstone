<?php
/* @var $this GalleryimageController */
/* @var $model Galleryimage */

$this->breadcrumbs=array(
	'Galleryimages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Galleryimage', 'url'=>array('index')),
	array('label'=>'Create Galleryimage', 'url'=>array('create')),
	array('label'=>'Update Galleryimage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Galleryimage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Galleryimage', 'url'=>array('admin')),
);
?>

<h1>View Galleryimage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'path',
	),
)); ?>
