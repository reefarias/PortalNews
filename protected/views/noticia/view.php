<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Noticia', 'url'=>array('index')),
	array('label'=>'Create Noticia', 'url'=>array('create')),
	array('label'=>'Update Noticia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
?>

<h1>View Noticia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('name' => 'idAutor', 		'label' => 'Autor', 	'value' => $autor->nome),
		array('name' => 'idCategoria', 	'label' => 'Categoria',	'value' => $categoria->nome),
		array('name' => 'data',			'label' => 'Data',		'value' => date_format(new DateTime($model->data), 'd/m/Y H:i:s')),
		'titulo',
		'conteudo',
	),
)); ?>