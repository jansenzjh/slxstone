<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/nivo-slider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/light.css" />
        
        
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
        <!--[if lt IE 7]><link rel="stylesheet" href="css/bootstrap-ie6.css"><![endif]-->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-image-gallery.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" />
        
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.nivo.slider.pack.js"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/load-image.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-image-gallery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/floating-1.8.js"></script>

        <title><?php echo CHtml::encode(Yii::t('yii', 'web_title')); ?></title>
</head>

    <body class="custom_body" style="background-image: url('<?php echo Yii::app()->baseUrl . '/img/background.jpg' ?>')">
<div class="container" id="page">

	<div id="header">
		<div id="logo">
                    <img style='width:100%' border="0" src="<?php echo Yii::app()->baseUrl . '/img/logo.jpg'?>" alt="logo" >
                </div>
                

                                    
	</div><!-- header -->
        <div class="navbar">
            <div id="mainmenu" class="navbar-inner">
                <div class='container'>
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </a>
                    <a class="brand" href="<?php echo Yii::app()->baseUrl ?>"><?php echo Yii::t('yii', 'web_title') ?></a>
                    <div class='nav-collapse collapse'>
                        
                    
                        <?php 
                        $lang = Yii::app()->language;
                        $isChinese = FALSE;
                        $englishURL = 'http://www.crazyhungry.net/Rock/';
                        $chineseURL = 'http://www.crazyhungry.net/cn/Rock/';
                        if ($lang == 'zh_cn'){
                            $isChinese = TRUE;
                        }else{
                            $isChinese = FALSE;
                        }
                        
                        $this->widget('zii.widgets.CMenu',array(
                                'items'=>array(
                                        //array('label'=>Yii::t('yii', 'home'), 'url'=>array('/site/index')),
                                        array('label'=>Yii::t('yii', 'product'), 'url'=>array('/rock/index')),
                                        array('label'=>Yii::t('yii', 'gallery'), 'url'=>array('/galleryimage', 'view'=>'index')),
                                        array('label'=>Yii::t('yii', 'artware'), 'url'=>array('/artware', 'view'=>'index')),
                                        array('label'=>Yii::t('yii', 'about'), 'url'=>array('/site/page', 'view'=>'about')),
                                        array('label'=>Yii::t('yii', 'contact'), 'url'=>array('/contact/create')),
                                        array('label'=>Yii::t('yii', 'login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        array('label'=>Yii::t('yii', 'admin_all_link'), 'url'=>array('/site/adminAll'), 'visible'=>!Yii::app()->user->isGuest),
                                        array('label'=>Yii::t('yii', 'logout').'('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                                        array('label'=>Yii::t('yii', 'English'), 'url'=>$englishURL, 'visible'=>$isChinese),
                                        array('label'=>Yii::t('yii', '简体中文'), 'url'=>$chineseURL, 'visible'=>!$isChinese)
                                ),
                        )); ?>
                    </div><!--nav-collapse collapse-->
                </div><!--container-->
            </div><!-- mainmenu -->
        </div><!--navbar -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        <?php echo $content; ?>
       
	<div class="clear"></div>

        
        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by DHC.<br/>
            All Rights Reserved.<br/>
            Powered by <a href="http://www.crazyhungry.net/" rel="external">CHSoft</a>
	</div>
        <?php // echo phpinfo();?>
        <!-- footer -->

</div><!-- page -->

<div id="qrcode" style="position:absolute;width:150px;height:150px;top:10px;right:10px;font-size:xx-small; z-index: 1000">  
    <img src="<?php echo Yii::app()->baseUrl."/img/qrcode.png" ?>" alt="QR Code">
</div>  
  
<script type="text/javascript">  
    floatingMenu.add('qrcode',  
        {  
            // Represents distance from left or right browser window  
            // border depending upon property used. Only one should be  
            // specified.  
            // targetLeft: 0,  
            targetRight: 10,  
  
            // Represents distance from top or bottom browser window  
            // border depending upon property used. Only one should be  
            // specified.  
            // targetTop: 10,  
            targetBottom: 10,  
  
            // Uncomment one of those if you need centering on  
            // X- or Y- axis.  
            // centerX: true,  
            // centerY: true,  
  
            // Remove this one if you don't want snap effect  
            snap: true  
        });  
</script>  

</body>
</html>
<script>
$(document).ready(function(){
    $('#mainmenu ul').addClass('nav');
});

</script>
