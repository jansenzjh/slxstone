<?php
/* @var $this SeriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Series',
);

$this->menu=array(
	array('label'=>'Create Series', 'url'=>array('create')),
	array('label'=>'Manage Series', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'series'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
