<?php
/* @var $this SeriesController */
/* @var $model Series */

$this->breadcrumbs=array(
	'Series'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Series', 'url'=>array('index')),
	array('label'=>'Manage Series', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'createseries'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>