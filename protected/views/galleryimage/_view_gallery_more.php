
<div class="view">
    <div class="">
        <div class="">
            <?php 
                $gallery_image = CHtml::image(Yii::app()->baseUrl . '/img/gallery_preview.jpg','Gallery Preview', array('style' => 'max-height:140px;',
                                                                                    'class'=>'img-rounded'));
                echo CHtml::link(CHtml::encode(Yii::t('yii', 'gallery')), array('galleryimage/index'), array('class'=>'color_title'));
                echo CHtml::link($gallery_image, array('galleryimage/index'), array('class'=>'color_title'));
            ?>
        </div>
    </div> 
</div>