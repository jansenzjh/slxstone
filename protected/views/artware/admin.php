<?php
/* @var $this ArtwareController */
/* @var $model Artware */

$this->breadcrumbs=array(
	'Artwares'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Artware', 'url'=>array('index')),
	array('label'=>'Create Artware', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#artware-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('yii', 'manageartware'); ?></h1>

<p>
你可以选择 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>)来对结果进行搜索从而得到更精确的结果
</p>

<?php echo CHtml::link(Yii::t('yii', 'advsearch'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'artware-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'path',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
