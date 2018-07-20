<div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav affix-top" style='width:200px;'>
<!--      <li><a href="#">New Product</a></li>-->
      <?php echo sprintf('<li id=\'new_product\'><a href=\'%s\'>%s</a><li>', $this->createUrl('index'), Yii::t('yii', 'new_product')) ?>
        <li><a href="#"><?php echo Yii::t('yii','product_series'); ?></a></li>
      <?php
        $seriesList = Series::model()->findAll();
        foreach ($seriesList as $s){
            echo sprintf('<li id=\'series_%s\'><a href=\'%s\'>%s</a><li>', (string)$s->id, $this->createUrl('showseries',array('type_id'=>$s->id)), '&ensp;&#8226;'.$s->description);
        }
      ?>
<!--      <li id="colors"><a href="#">Colors</a></li>-->
      <?php echo sprintf('<li id=\'colors\'><a href=\'%s\'>%s</a><li>', $this->createUrl('showcolors'), Yii::t('yii', 'color')) ?>
      <li id="dimensions"><a href="#"><?php echo Yii::t('yii','dimension'); ?></a></li>
      <li id="advantage"><a href="#"><?php echo Yii::t('yii','advantage'); ?></a></li>
      <li id="tech_spec"><a href="#"><?php echo Yii::t('yii','techspec'); ?></a></li>
      <li id="shopping_cart"><a href="#"><?php echo Yii::t('yii','shopping_cart'); ?></a></li>
    </ul>
</div>

<script>
    $(document).ready(function(){
        var url = window.location.href;
        if (url.indexOf("showseries&type_id=1") > 0){
            $('#series_1').addClass('active');
        }else if (url.indexOf("showseries&type_id=2") > 0){
            $('#series_2').addClass('active');
        }else if (url.indexOf("showseries&type_id=3") > 0){
            $('#series_3').addClass('active');
        }else if (url.indexOf("showcolors") > 0){
            $('#colors').addClass('active');
        }else if (url.indexOf("showseries&type_id=1") > 0){
            $('#advantage').addClass('active');
        }else if (url.indexOf("showseries&type_id=1") > 0){
            $('#tech_spec').addClass('active');
        }else if (url.indexOf("showseries&type_id=1") > 0){
            $('#shopping_cart').addClass('active');
        }else if (url.indexOf("rock/index") > 0){
            $('#new_product').addClass('active');
        }
        
    });
</script>