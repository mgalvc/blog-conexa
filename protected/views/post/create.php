<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Escrever',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('index'))
);
?>

<h1>Escrever</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>