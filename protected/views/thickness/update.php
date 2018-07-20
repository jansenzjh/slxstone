<?php
/* @var $this ThicknessController */
/* @var $model Thickness */

$this->breadcrumbs=array(
	'Thicknesses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Thickness', 'url'=>array('index')),
	array('label'=>'Create Thickness', 'url'=>array('create')),
	array('label'=>'View Thickness', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Thickness', 'url'=>array('admin')),
);
?>

<h1>Update Thickness <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>