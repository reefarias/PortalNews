<?php 
	/* @var $this Controller */

	/*
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<?php Yii::app()->bootstrap->register(); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body><!-- style="padding-top: 20px; padding-bottom: 20px;" -->

<div class="container" id="page">

	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	    'brandLabel' => 'Portal News',
	    'display' => TbHtml::NAVBAR_DISPLAY_FIXEDTOP, // default is static to top
	    'items' => array(
	        array(
	            'class' => 'bootstrap.widgets.TbNav',
	            'items' => array(
	                array('label'=>'Home', 'url'=>array('/site/index'), 					'visible'=>!Yii::app()->user->isGuest),
					//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
					//array('label'=>'Contact', 'url'=>array('/site/contact')),
					
					array('label' => 'Administrador', 'items' => array(
						array('label' => 'Manage', 	'url' => array('/administrador/admin')),
						array('label' => 'List', 	'url' => array('/administrador')),
						array('label' => 'Create', 	'url' => array('/administrador/create')),
					), 'visible'=>!Yii::app()->user->isGuest, 'active'=>Yii::app()->controller->id=='administrador'),
					
					array('label' => 'Categoria', 'items' => array(
						array('label' => 'Manage', 	'url' => array('/categoria/admin')),
						array('label' => 'List', 	'url' => array('/categoria')),
						array('label' => 'Create', 	'url' => array('/categoria/create')),
					), 'visible'=>!Yii::app()->user->isGuest, 'active'=>Yii::app()->controller->id=='categoria'),
					
					array('label' => 'Noticia', 'items' => array(
						array('label' => 'Manage', 	'url' => array('/noticia/admin')),
						array('label' => 'List', 	'url' => array('/noticia')),
						array('label' => 'Create', 	'url' => array('/noticia/create')),
					), 'visible'=>!Yii::app()->user->isGuest, 'active'=>Yii::app()->controller->id=='noticia'),
	                
					//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
	            ),
	        ),
	    ),
	)); ?>
	
	<div style="padding-top: 60px;">
	
		<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
		    'links' => $this->breadcrumbs,
		)); ?>
		
	</div>

	<?php echo $content; ?>

	<hr>
	
	<div id="footer" style="margin: 20px 0;">
		Copyright &copy; <?php echo date('Y'); ?> by Fernando Sanches.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>

</div><!-- page -->

</body>
</html>
