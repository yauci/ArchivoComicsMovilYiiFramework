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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); 
              Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/detectmobilebrowser.js'); 
        ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
                
                Yii::app()->clientScript->registerScript('detectmobilebrowser',"

if (window.location.search.search('mobile') == -1) {

 if (window.location.search.length) {

 window.location.replace 

 (document.URL + '&mobile=on');

 } 

 else {

 window.location.replace 

 (document.URL + '?mobile=on');

 }

 }

}

 ",CClientScript::POS_READY);
                
                
                    if (Yii::app()->user->isGuest) {
                        $this->widget('zii.widgets.CMenu',array(
                            'activeCssClass' => 'active',
                            'activateParents' => true,
                            'items'=>array(
                            	array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login')),
                            ),
                        )); 
                    } else {
                        $this->widget('zii.widgets.CMenu',array(
                            'activeCssClass' => 'active',
                            'activateParents' => true,
                            'items'=>array(
                            	array('label'=>'Home', 'url'=>array('/site/index')),
                            	array(
                                    'label'=>'Comic Books', 
                                    'url'=>array('/book'),
                                    'items' => array(
                                        array('label'=>'Publishers', 'url'=>array('/publisher')),
                                    )
                                ),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'))
                            ),
                        ));                     
                    }
            ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
