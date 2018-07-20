<?php
/* @var $this OrderdetailController */
/* @var $model Orderdetail */

$this->breadcrumbs=array(
	'Orderdetails'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Orderdetail', 'url'=>array('index')),
	array('label'=>'Create Orderdetail', 'url'=>array('create')),
	array('label'=>'View Orderdetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Orderdetail', 'url'=>array('admin')),
);
?>

<h1>Update Orderdetail <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>