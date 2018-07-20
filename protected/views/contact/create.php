
<script src="http://api.map.baidu.com/api?v=1.5&ak=C411f7a8a10334aaec9845af73804bfa" type="text/javascript"></script> 
<h1><?php echo Yii::t('yii', 'createcontact'); ?></h1>
<div class="container">
    <div class="row">
        <div class="span3">
            <div id=""></div>
            <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
        <br />
        
        <div class="span6">
            <div id="map-canvas"></div>
            <br />
            <br />
            <div>
                <?php  $this->renderPartial('application.views.share._contact_info_lite'); ?>
            </div>
        </div>
        
    </div>
</div>
<script>

var map = new BMap.Map("map-canvas"); 


var point = new BMap.Point(112.050852,22.925965);    
map.centerAndZoom(point, 15); 
map.enableScrollWheelZoom();  //激活滚轮调整大小功能 
map.addControl(new BMap.OverviewMapControl());//添加控件
map.addControl(new BMap.ScaleControl());//添加控件
map.addControl(new BMap.MapTypeControl());//添加控件
var opts = {type: BMAP_NAVIGATION_CONTROL_LARGE} 
map.addControl(new BMap.NavigationControl(opts)); 
 
 //标注  
var marker = new BMap.Marker(point);  
map.addOverlay(marker);  
marker.addEventListener("click",function(){ //点击标注时出发事件  
    //alert("您点击了标注");  
});  

var opts = {    
                width : 250,     // 信息窗口宽度    
                height: 100,     // 信息窗口高度    
                title : '<?php echo Yii::t('yii', 'addresstitle') ?>'  // 信息窗口标题    
            };  
var infoWindow = new BMap.InfoWindow('<?php echo Yii::t('yii', 'dpaddress') ?>', opts);  // 创建信息窗口对象    
map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口   

 
 

</script>