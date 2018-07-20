<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
//$this->breadcrumbs=array(
//	'About',
//);
?>
<!--<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>-->


<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
         <?php echo Yii::t('yii', 'aboutus') ?>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body  in">
      <div class="accordion-inner">
          <div class="row">
              <div class="span-15">
                  <p><?php echo Yii::t('yii', 'about1') ?></p>
                  <p><?php echo Yii::t('yii', 'about2') ?></p>
              </div>
              <div class="span-11">
                  <?php echo CHtml::image(Yii::app()->baseUrl . '/img/shop_title.jpg','shop_title', array('class'=>'img-rounded')); ?>
              </div>
          </div>
          
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        <?php echo Yii::t('yii', 'ourvalue') ?>
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body ">
      <div class="accordion-inner">
          
          <div class="row">
              <div class="span-11">
                  <?php echo CHtml::image(Yii::app()->baseUrl . '/img/shop_outside.jpg','shop_outside', array('class'=>'img-rounded')); ?>
              </div>
              <div class="span-15">
                  <strong><?php echo Yii::t('yii', 'ourproduct') ?></strong><br>
                  <p><?php echo Yii::t('yii', 'ourproduct1') ?></p>
                  <strong><?php echo Yii::t('yii', 'ourquality') ?></strong><br>
                  <p><?php echo Yii::t('yii', 'ourquality1') ?></p>
                  <strong><?php echo Yii::t('yii', 'ourcustomers') ?></strong><br>
                  <p><?php echo Yii::t('yii', 'ourcustomers1') ?></p>
                  <strong><?php echo Yii::t('yii', 'ourambitions') ?></strong><br>
                  <p><?php echo Yii::t('yii', 'ourambitions1') ?></p>
              </div>
              
          </div>
      </div>
    </div>
  </div>
<!--  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
        <?php echo Yii::t('yii', 'careers') ?>
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
          <?php //$this->renderPartial('application.views.site.pages.careers') ?>
      </div>
    </div>
  </div>-->
</div>