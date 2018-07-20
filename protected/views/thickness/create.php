<?php
/* @var $this ThicknessController */
/* @var $model Thickness */

$this->breadcrumbs=array(
	'Thicknesses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Thickness', 'url'=>array('index')),
	array('label'=>'Manage Thickness', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'createthickness'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>