<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nome',array('span'=>5,'maxlength'=>300)); ?>

                    <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>300)); ?>

                    <?php echo $form->textFieldControlGroup($model,'login',array('span'=>5,'maxlength'=>300)); ?>

                    <?php echo $form->textFieldControlGroup($model,'senha',array('span'=>5,'maxlength'=>300)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->