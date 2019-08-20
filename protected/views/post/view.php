<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Início', 'url'=>array('index')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->titulo; ?></h1>

<h4>
	<i>
		<?php echo $model->autor; ?>, em <?php echo $this->formattedDate($model->created_at) ?>
	</i>
</h4>

<p>
	<b>Categoria: <?php echo $model->categoria->nome ?></b>
</p>

<p class="full-text">
	<?php echo $model->texto; ?>	
</p>

<span>
	<i>
		Atualizado em <?php echo $this->formattedDate($model->updated_at) ?>
	</i>
</span>
