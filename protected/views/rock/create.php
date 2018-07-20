<?php
/* @var $this RockController */
/* @var $model Rock */

$this->breadcrumbs=array(
	'Rocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rock', 'url'=>array('index')),
	array('label'=>'Manage Rock', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'createrock');  ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>