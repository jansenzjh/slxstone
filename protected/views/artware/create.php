<?php
/* @var $this ArtwareController */
/* @var $model Artware */

$this->breadcrumbs=array(
	'Artwares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Artware', 'url'=>array('index')),
	array('label'=>'Manage Artware', 'url'=>array('admin')),
);
?>

<h1>Create Artware</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>