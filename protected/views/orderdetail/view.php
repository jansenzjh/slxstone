<?php
/* @var $this OrderdetailController */
/* @var $model Orderdetail */

$this->breadcrumbs=array(
	'Orderdetails'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Orderdetail', 'url'=>array('index')),
	array('label'=>'Create Orderdetail', 'url'=>array('create')),
	array('label'=>'Update Orderdetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Orderdetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Orderdetail', 'url'=>array('admin')),
);
?>

<h1>View Orderdetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'orderId',
		'rockId',
		'quantity',
	),
)); ?>
