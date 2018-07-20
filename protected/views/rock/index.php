<?php
/* @var $this RockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rocks',
);

//$this->menu=array(
//	array('label'=>'Create Rock', 'url'=>array('create')),
//	array('label'=>'Manage Rock', 'url'=>array('admin')),
//);
?>

<!--<h1>Rocks</h1>-->
<!--Nav-->
<div class="container">
    <div class="row">
        <div class="render">
            <?php  $this->renderPartial('_product_navigation'); ?>
        </div>
        <div class="span8">
            
            <?php
            $rock_list = Rock::model()->findAll();
                foreach($rock_list as $rock){
                    $this->renderPartial('_rock_display_info', array('data'=>$rock));
                }
             
            ?>
        </div>
       
    </div>
</div>