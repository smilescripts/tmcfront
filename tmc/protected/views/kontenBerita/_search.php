<?php
/* @var $this KontenBeritaController */
/* @var $model KontenBerita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_konten'); ?>
		<?php echo $form->textField($model,'kode_konten'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_berita'); ?>
		<?php echo $form->textField($model,'kode_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_konten'); ?>
		<?php echo $form->textArea($model,'file_konten',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->