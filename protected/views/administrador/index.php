<?php
/* @var $this AdministradorController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Administradors',
);

$this->menu=array(
	array('label'=>'Create Administrador','url'=>array('create')),
	array('label'=>'Manage Administrador','url'=>array('admin')),
);
?>

<h1>Administradors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>