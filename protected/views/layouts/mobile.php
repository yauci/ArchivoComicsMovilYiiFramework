<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!--CSS includes here -->
        
        <link rel="stylesheet" type="text/css" 
              href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mobile-1.3.2.min.css" media="screen, projection" />

	<?php 
		Yii::app()->clientScript->registerCoreScript('jquery'); 
                Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.mobile-1.3.2.min.js');
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body> 
    <div data-role="page">

        <div data-role="collapsible" data-theme="b">

 <h3>Main Menu</h3>

 <?php 

 $htmlOptions = array('data-role' => 'controlgroup', 

 'class' => 'localnav');

 $linkOptions = array('data-role' => 'button', 

 'data-theme' => 'b', 'rel' => 'external'); 

 $items = array(); 

 if (Yii::app()->user->isGuest) {

 $items[] = array('label'=>'Login', 

 'url'=>array('/site/login'), 'linkOptions' => 

 $linkOptions);

 } 

 else {

 $items[] = array('label'=>'Home', 

 'url'=>array('/site/index'), 'linkOptions' => 

 $linkOptions);
 $items[] = array('label'=>'Comic Books', 

 'url'=>array('/book'), 'linkOptions'=> 

 $linkOptions);

 $items[] = array('label'=>'Logout (' . Yii::app()->user->name . ')', 'url'=>array('/site/logout'),'linkOptions' => $linkOptions);

 }

 $non_mobile_uri = preg_replace('/mobile=on/', 

 'mobile=off', /*'/site/login');*/Yii::app()->request->baseUrl);

 $items[] = array('label'=>'Turn off mobile view', 

 'url'=>array('?mobile=off'), 'linkOptions' => 

 $linkOptions);

 $this->widget('zii.widgets.CMenu',array(

 'activeCssClass' => 'active',

 'activateParents' => true,

 'htmlOptions' => $htmlOptions,

 'items'=> $items

 )

 );

 ?>

</div><!-- collapsible -->

<?php

if (count($this->menu) > 0) {

 echo "<div data-role='collapsible' data-theme='b'>\n";

 echo "\t<h3>Operations</h3>\n";

 foreach ($this->menu as $key=>$item) {

 $this->menu[$key]['linkOptions'] = $linkOptions;

 }

 $this->widget('zii.widgets.CMenu', array(

 'items'=>$this->menu,

 'htmlOptions'=> $htmlOptions,

 ));

 //No discomment
 //$this->endWidget();

 echo "</div><!-- collapsible -->\n";

}?>
        
        <div data-role="content">
            <?php echo $content; ?>
        </div><!-- content -->
        <div data-role="footer">
            <center>
                <?php echo Yii::powered(); ?>
            </center>
        </div><!-- footer -->
    </div><!-- page -->
</body>
</html>
