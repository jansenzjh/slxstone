<?php
/* @var $this ArtwareController */
/* @var $model Artware */

$this->breadcrumbs=array(
	'Artwares'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artware', 'url'=>array('index')),
	array('label'=>'Create Artware', 'url'=>array('create')),
	array('label'=>'View Artware', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Artware', 'url'=>array('admin')),
);
?>

<h1>Update Artware <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>