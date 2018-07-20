<?php



?>
<div class=' container'>
    <div class='main_tittle'><?php echo Yii::t('yii', 'artware_bar');  ?></div><br>
    <!--Here should loop image-->
    <div class="row">
    <div class="slider-wrapper theme-light span-5" >
        <div id='imageLoop' class="nivoSlider " style="width:200px">
            <?php
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/1.jpg','1', array('max-height' => '100px','max-width' => '200px','class'=>'img-rounded'));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/2.jpg','2', array('max-height' => '100px','max-width' => '200px','class'=>'img-rounded'));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/3.jpg','3', array('max-height' => '100px','max-width' => '200px','class'=>'img-rounded'));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/4.jpg','4', array('max-height' => '100px','max-width' => '200px','class'=>'img-rounded'));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/5.jpg','5', array('max-height' => '100px','max-width' => '200px','class'=>'img-rounded'));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/6.jpg','6', array('max-height' => '100px','max-width' => '200px','class'=>'img-rounded'));
            ?>

        </div>
    </div> 
        <div class="span-12">
            <?php echo Yii::t('yii', 'artware_intro'); ?>
        </div>
    
        <div class="span-9">
            <?php echo CHtml::link(CHtml::encode(Yii::t('yii', 'hotline') . "400-123-1234"), array('contact/create'), array('class'=> 'btn btn-primary btn-large index_btn')); ?> <br /><br />
            <?php echo CHtml::link(CHtml::encode(Yii::t('yii', 'btnVisit')), array('contact/create'), array('class'=> 'btn btn-danger btn-large index_btn')); ?> <br /><br />
            <?php echo CHtml::link(CHtml::encode(Yii::t('yii', 'btnAppointment')), array('contact/create'), array('class'=> 'btn btn-success btn-large index_btn')); ?> 
        </div>
    </div>
</div>

<script type="text/javascript">
    $(window).load(function() {
        $('#imageLoop').nivoSlider({
            effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
            slices: 15, // For slice animations
            boxCols: 8, // For box animations
            boxRows: 4, // For box animations
            animSpeed: 500, // Slide transition speed
            pauseTime: 10000, // How long each slide will show
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
</script>