<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->autor); ?></b> disse:
	<br />

	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<i> Em <?php echo CHtml::encode($this->formattedDate($data->created_at)); ?></i>

</div>