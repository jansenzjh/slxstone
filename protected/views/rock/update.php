<?php
/* @var $this RockController */
/* @var $model Rock */

$this->breadcrumbs=array(
	'Rocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rock', 'url'=>array('index')),
	array('label'=>'Create Rock', 'url'=>array('create')),
	array('label'=>'View Rock', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rock', 'url'=>array('admin')),
);
?>

<h1>Update Rock <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>