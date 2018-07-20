<?php
/* @var $this FinishedtypeController */
/* @var $model Finishedtype */

$this->breadcrumbs=array(
	'Finishedtypes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Finishedtype', 'url'=>array('index')),
	array('label'=>'Create Finishedtype', 'url'=>array('create')),
	array('label'=>'View Finishedtype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Finishedtype', 'url'=>array('admin')),
);
?>

<h1>Update Finishedtype <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>