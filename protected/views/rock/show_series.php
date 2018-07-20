<?php
/* @var $this RockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rocks',
);

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
                foreach($model as $rock){
                    $this->renderPartial('_rock_display_info', array('data'=>$rock));
                }
             
            ?>
        </div>
       
    </div>
</div>