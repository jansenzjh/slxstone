<?php
/* @var $this ThicknessController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Thicknesses',
);

$this->menu=array(
	array('label'=>'Create Thickness', 'url'=>array('create')),
	array('label'=>'Manage Thickness', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('yii', 'thickness'); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
