<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->label($model,'categoria'); ?>
		<?php echo $form->dropDownList($model,'id_categoria',$this->getCategorias()); ?>

		<?php echo CHtml::submitButton('Filtrar'); ?>

<?php $this->endWidget(); ?>
