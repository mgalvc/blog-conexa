<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('index'))
);
?>

<h1>Editar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>