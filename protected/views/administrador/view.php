<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
?>

<?php
$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Create Administrador', 'url'=>array('create')),
	array('label'=>'Update Administrador', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Administrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Administrador', 'url'=>array('admin')),
);
?>

<h1>View Administrador #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nome',
		'email',
		'login',
		'senha',
	),
)); ?>