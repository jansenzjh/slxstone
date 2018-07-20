<?php
/* @var $this FinishedtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Finishedtypes',
);

$this->menu=array(
	array('label'=>'Create Finishedtype', 'url'=>array('create')),
	array('label'=>'Manage Finishedtype', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'finishedtype'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
