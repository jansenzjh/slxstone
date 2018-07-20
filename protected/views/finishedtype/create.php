<?php
/* @var $this FinishedtypeController */
/* @var $model Finishedtype */

$this->breadcrumbs=array(
	'Finishedtypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Finishedtype', 'url'=>array('index')),
	array('label'=>'Manage Finishedtype', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'createfinishedtype'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>