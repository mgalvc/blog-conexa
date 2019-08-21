<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Início', 'url'=>array('index')),
	array('label'=>'Escrever', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});

$('.search-form form').submit(function(){
	$.fn.yiiListView.update('list-view', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Todos os posts</h1>

<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>


<?php $this->widget('zii.widgets.CListView', array(
	'id'=>'list-view',
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
)); ?>