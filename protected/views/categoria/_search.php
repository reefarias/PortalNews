<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'nome',array('span'=>5,'maxlength'=>200)); ?>

	<div class="form-actions">
		<?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

<?php echo TbHtml::endForm(); ?>