<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Escrever', 'url'=>array('create')),
	array('label'=>'Ver todas', 'url'=>array('admin', 'id_categoria' => 0)),
);
?>

<h1>Últimas postagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
