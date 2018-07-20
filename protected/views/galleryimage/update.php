<?php
/* @var $this GalleryimageController */
/* @var $model Galleryimage */

$this->breadcrumbs=array(
	'Galleryimages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Galleryimage', 'url'=>array('index')),
	array('label'=>'Create Galleryimage', 'url'=>array('create')),
	array('label'=>'View Galleryimage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Galleryimage', 'url'=>array('admin')),
);
?>

<h1>Update Galleryimage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>