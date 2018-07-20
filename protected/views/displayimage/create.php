<?php
/* @var $this DisplayimageController */
/* @var $model Displayimage */

$this->breadcrumbs=array(
	'Displayimages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Displayimage', 'url'=>array('index')),
	array('label'=>'Manage Displayimage', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'createdisplayimage'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>