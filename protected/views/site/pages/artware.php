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
    <div id='imageLoop' class=" " style="">
            <?php
            $width = '150px';
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/1.jpg','1', array('max-height' => '100px','max-width' => $width,'class'=>''));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/2.jpg','2', array('max-height' => '100px','max-width' => $width,'class'=>''));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/3.jpg','3', array('max-height' => '100px','max-width' => $width,'class'=>''));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/4.jpg','4', array('max-height' => '100px','max-width' => $width,'class'=>''));
            echo CHtml::image(Yii::app()->baseUrl . '/uploads/artware/6.jpg','6', array('max-height' => '100px','max-width' => $width,'class'=>''));
            ?>

        </div>
<!--  <div class="accordion-group">
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
  </div>-->
</div>