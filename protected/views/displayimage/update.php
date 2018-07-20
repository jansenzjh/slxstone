<?php
/* @var $this DisplayimageController */
/* @var $model Displayimage */

$this->breadcrumbs=array(
	'Displayimages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Displayimage', 'url'=>array('index')),
	array('label'=>'Create Displayimage', 'url'=>array('create')),
	array('label'=>'View Displayimage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Displayimage', 'url'=>array('admin')),
);
?>

<h1>Update Displayimage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>