<?php
/* @var $this BeritaController */
/* @var $model Berita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'berita-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judul_berita'); ?>
		<?php echo $form->textArea($model,'judul_berita',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'judul_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi_berita'); ?>
		<?php echo $form->textArea($model,'isi_berita',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'isi_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_posting'); ?>
		<?php echo $form->textField($model,'tanggal_posting'); ?>
		<?php echo $form->error($model,'tanggal_posting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oleh_petugas'); ?>
		<?php echo $form->textField($model,'oleh_petugas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_berita'); ?>
		<?php echo $form->textField($model,'kategori_berita'); ?>
		<?php echo $form->error($model,'kategori_berita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->