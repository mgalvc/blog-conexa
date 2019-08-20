<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
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
