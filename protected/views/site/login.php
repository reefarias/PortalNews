<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<p>Please fill out the following form with your login credentials:</p>

<p class="note">Fields with <span class="required">*</span> are required.</p><br>	

<?php echo $form->textFieldControlGroup($model,'username',array('span'=>3,'maxlength'=>200)); ?>
<?php echo $form->textFieldControlGroup($model,'password',array('span'=>3,'maxlength'=>200)); ?>

<div class="form-actions">
	<?php echo TbHtml::submitButton('Login',array(
	    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
	    'size'=>TbHtml::BUTTON_SIZE_DEFAULT,
	)); ?>
</div>

<?php $this->endWidget(); ?>

<?php echo TbHtml::endForm(); ?>
