<?php
/* @var $this KontenBeritaController */
/* @var $model KontenBerita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'konten-berita-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_berita'); ?>
		<?php echo $form->textField($model,'kode_berita'); ?>
		<?php echo $form->error($model,'kode_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_konten'); ?>
		<?php echo $form->textArea($model,'file_konten',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'file_konten'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->