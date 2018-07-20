<?php
/* @var $this GalleryimageController */
/* @var $model Galleryimage */

$this->breadcrumbs=array(
	'Galleryimages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Galleryimage', 'url'=>array('index')),
	array('label'=>'Manage Galleryimage', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'creategalleryimage');  ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>