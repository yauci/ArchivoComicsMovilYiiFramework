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
