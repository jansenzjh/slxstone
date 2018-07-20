<?php
/* @var $this DisplayimageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Displayimages',
);

$this->menu=array(
	array('label'=>'Create Displayimage', 'url'=>array('create')),
	array('label'=>'Manage Displayimage', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'displayimage'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
