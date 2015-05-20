<?php
/* @var $this BeritaController */
/* @var $model Berita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_berita'); ?>
		<?php echo $form->textField($model,'kode_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul_berita'); ?>
		<?php echo $form->textField($model,'judul_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi_berita'); ?>
		<?php echo $form->textField($model,'isi_berita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_posting'); ?>
		<?php echo $form->textField($model,'tanggal_posting'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oleh_petugas'); ?>
		<?php echo $form->textField($model,'oleh_petugas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_berita'); ?>
		<?php echo $form->textField($model,'kategori_berita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->