<?php
/* @var $this NoticiaController */
/* @var $data Noticia */

$autor		= Administrador::model()->findByPk($data->idAutor);
$categoria	= Categoria::model()->findByPk($data->idCategoria);
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAutor')); ?>:</b>
	<?php 
		//echo CHtml::encode($data->idAutor);
		echo CHtml::encode($autor->nome);
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCategoria')); ?>:</b>
	<?php 
		//echo CHtml::encode($data->idCategoria); 
		echo CHtml::encode($categoria->nome);
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php 
		//echo CHtml::encode($data->data);
		echo CHtml::encode(date_format(new DateTime($data->data), 'd/m/Y H:i:s'));
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

</div>