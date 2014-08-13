<?php
/* @var $this AdministradorController */
/* @var $model Administrador */


$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Create Administrador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#administrador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Administradors</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'administrador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => array(TbHtml::GRID_TYPE_STRIPED),
	'columns'=>array(
		array(
            'name' => 'id',
            'header' => 'ID',
        ),
        array(
            'name' => 'nome',
            'header' => 'Nome',
        ),
        array(
            'name' => 'email',
            'header' => 'Email',
        ),
        array(
            'name' => 'login',
            'header' => 'Login',
        ),
      	array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
      		'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>