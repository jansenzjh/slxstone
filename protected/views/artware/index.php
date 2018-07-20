

<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
    <?php 
    //$this->widget('zii.widgets.CListView', array(
    //	'dataProvider'=>$dataProvider,
    //	'itemView'=>'_view',
    //)); 
        $imageList = Artware::model()->findAll();
//        foreach($imageList as &$value){
//            $imagePath = CHtml::image('/Rock/uploads/gallery/'.$value->path,'', array('style' => 'max-width:200px; max-height:200px;',
//                                                                                'class'=>'img-rounded'));
//            echo sprintf("<div class='gallery_image'><a href=\"%s\" title=\"%s\" data-gallery=\"gallery\">%s</a></div>", '/Rock/uploads/gallery/'.$value->path, $value->path, $imagePath);
//        }
        
        foreach($imageList as &$value){
            $image_css = '<div class="gallery_test img-rounded" style= "background-image:url('.Yii::app()->baseUrl . '/uploads/artware/'.$value->path .')"></div>';
            echo sprintf("<div class='gallery_image'><a href=\"%s\" title=\"%s\" data-gallery=\"gallery\">%s</a></div>", Yii::app()->baseUrl . '/uploads/artware/'.$value->path, $value->path, $image_css);
        }

?>
</div>

<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
</div> 


<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
         <?php echo Yii::t('yii', 'artware_title') ?>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body  in">
      <div class="accordion-inner">
          <div class="row">
              <div class="span-15">
                  <p><?php echo Yii::t('yii', 'artware_intro1') ?></p>
                  <p><?php echo Yii::t('yii', 'artware_intro2') ?></p>
                  <p><?php echo Yii::t('yii', 'artware_intro3') ?></p>
                  <p><?php echo Yii::t('yii', 'artware_intro4') ?></p>
                  <p><?php echo Yii::t('yii', 'artware_intro5') ?></p>
              </div>
              <div class="span-11">
                  <?php echo CHtml::image(Yii::app()->baseUrl . '/img/shop_inside.jpg','shop_inside', array('class'=>'img-rounded')); ?>
              </div>
          </div>
          
      </div>
    </div>
  </div>

</div>

<script>
    $(document).ready(function(){
        $('.span-19').removeClass('span-19');
    });
</script>