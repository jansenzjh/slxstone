<?php
/* @var $this RockController */


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
                $all_colors = Color::model()->findAll();
                foreach ($all_colors as $color){
                    $model = Rock::model()->findAll(array("condition"=>"color = $color->id"));
                    if (count($model) > 0){
                        echo '<div class=\'color_title\'>'.$color->description . '</div><hr><br>';
                        foreach($model as $rock){
                            if ($rock->color == $color->id){
                                $this->renderPartial('_rock_display_info', array('data'=>$rock));
                            }
                        }
                        echo '<hr>';
                    }
//                    echo '<div class=\'color_title\'>'.$color->description . '</div><br><hr><br>';
//                    
//                    foreach($model as $rock){
//                        if ($rock->color == $color->id){
//                            $this->renderPartial('_rock_display_info', array('data'=>$rock));
//                        }
//                    }
                    
                }
                
             
            ?>
        </div>
       
    </div>
</div>