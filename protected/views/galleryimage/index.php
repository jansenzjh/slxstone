<?php
/* @var $this GalleryimageController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Galleryimages',
//);

//$this->menu=array(
//	array('label'=>'Create Galleryimage', 'url'=>array('create')),
//	array('label'=>'Manage Galleryimage', 'url'=>array('admin')),
//);
?>


<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
    <?php 
    //$this->widget('zii.widgets.CListView', array(
    //	'dataProvider'=>$dataProvider,
    //	'itemView'=>'_view',
    //)); 
        $imageList = Galleryimage::model()->findAll();
//        foreach($imageList as &$value){
//            $imagePath = CHtml::image('/Rock/uploads/gallery/'.$value->path,'', array('style' => 'max-width:200px; max-height:200px;',
//                                                                                'class'=>'img-rounded'));
//            echo sprintf("<div class='gallery_image'><a href=\"%s\" title=\"%s\" data-gallery=\"gallery\">%s</a></div>", '/Rock/uploads/gallery/'.$value->path, $value->path, $imagePath);
//        }
        
        foreach($imageList as &$value){
            $image_css = '<div class="gallery_test img-rounded" style= "background-image:url('.Yii::app()->baseUrl . '/uploads/gallery/'.$value->path .')"></div>';
            echo sprintf("<div class='gallery_image'><a href=\"%s\" title=\"%s\" data-gallery=\"gallery\">%s</a></div>", Yii::app()->baseUrl . '/uploads/gallery/'.$value->path, $value->path, $image_css);
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

<script>
    $(document).ready(function(){
        $('.span-19').removeClass('span-19');
    });
</script>