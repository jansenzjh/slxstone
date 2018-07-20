<?php
/* @var $this FinishedtypeController */
/* @var $model Finishedtype */

$this->breadcrumbs=array(
	'Finishedtypes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Finishedtype', 'url'=>array('index')),
	array('label'=>'Create Finishedtype', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#finishedtype-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('yii', 'managefinishedtype'); ?></h1>

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
	'id'=>'finishedtype-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
