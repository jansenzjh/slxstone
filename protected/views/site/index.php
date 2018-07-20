<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!--image slider-->
<div class="">
    <div class=''>
        <div class="slider-wrapper theme-light">
            <div id="slider" class="nivoSlider">
            <?php
                $imageList = Displayimage::model()->findAll();
                foreach($imageList as &$value){
                    echo CHtml::image(Yii::app()->baseUrl . '/uploads/display/'.$value->path,'', array('max-height' => '100px',
                                                                                        'max-width' => '200px',
                                                                                        'class'=>'img-rounded'));
                }
            ?>
           </div>
        </div>
    </div>
</div>
<!-- end of image slider-->

<!--artware info-->
<div>
    <?php $this->renderPartial('application.views.artware._lite_view'); ?>
</div>
<br>
<!--end of artware info-->

<!--Rock display-->
<div class="container">
    <div class='main_tittle'><?php echo Yii::t('yii', 'rock_bar'); ?></div>
    <div class="row">
        <?php 
            $rand_rock = Rock::model()->findAll(array('select'=>'*, rand() as rand',
                                                        'limit'=>'4',
                                                        'order'=>'rand'));
        ?>
        <?php 
            foreach ($rand_rock as $r){ 
                echo '<div class="span2">';
                $this->renderPartial('application.views.rock._liteview', array('data'=>$r));
                echo '</div>';
            }
         ?>
        
        <div class="span2">
            <div>
                <?php $this->renderPartial('application.views.galleryimage._view_gallery_more') ?>
            </div>
        </div>
        
        
    </div>
</div><!--container-->
<!--end of Rock display-->


<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'sliceUpLeft', // Specify sets like: 'fold,fade,sliceDown'
            slices: 15, // For slice animations
            boxCols: 8, // For box animations
            boxRows: 4, // For box animations
            animSpeed: 500, // Slide transition speed
            pauseTime: 5000, // How long each slide will show
            startSlide: 0, // Set starting Slide (0 index)
            directionNav: true, // Next & Prev navigation
            controlNav: true, // 1,2,3... navigation
            controlNavThumbs: false, // Use thumbnails for Control Nav
            pauseOnHover: true, // Stop animation while hovering
            manualAdvance: false, // Force manual transitions
            prevText: 'Prev', // Prev directionNav text
            nextText: 'Next', // Next directionNav text
            randomStart: true, // Start on a random slide
            beforeChange: function(){}, // Triggers before a slide transition
            afterChange: function(){}, // Triggers after a slide transition
            slideshowEnd: function(){}, // Triggers after all slides have been shown
            lastSlide: function(){}, // Triggers when last slide is shown
            afterLoad: function(){} // Triggers when slider has loaded
        });
    });
//$(document).ready(function(){
//    $('.carousel').carousel();
//});
</script>