<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	'Adicionar',
);

$this->menu=array(
	array('label'=>'Voltar', 'url'=>array('post/view', 'id'=>Yii::app()->request->getParam('post_id'))),
);
?>

<h1>Adicionar Comentário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>