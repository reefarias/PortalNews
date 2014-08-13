<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form TbActiveForm */
?>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'categoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p><br>

    <?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'nome',array('span'=>5,'maxlength'=>200)); ?>

	<div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_DEFAULT,
		)); ?>
    </div>
    
    <?php $this->endWidget(); ?>

<?php echo TbHtml::endForm(); ?>