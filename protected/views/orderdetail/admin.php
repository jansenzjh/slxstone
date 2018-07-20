<?php
/* @var $this OrderdetailController */
/* @var $model Orderdetail */

$this->breadcrumbs=array(
	'Orderdetails'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Orderdetail', 'url'=>array('index')),
	array('label'=>'Create Orderdetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orderdetail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orderdetails</h1>

<p>
<?php echo Yii::t('yii', 'adminop1'); ?>(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>)<?php echo Yii::t('yii', 'adminop2'); ?>

</p>

<?php echo CHtml::link(Yii::t('yii', 'advsearch'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orderdetail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'orderId',
		'rockId',
		'quantity',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
