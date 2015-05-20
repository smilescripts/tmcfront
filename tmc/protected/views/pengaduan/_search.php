<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_pengaduan'); ?>
		<?php echo $form->textField($model,'kode_pengaduan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pengadu'); ?>
		<?php echo $form->textField($model,'nama_pengadu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi_pengaduan'); ?>
		<?php echo $form->textField($model,'isi_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_pengaduan'); ?>
		<?php echo $form->textField($model,'tanggal_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi'); ?>
		<?php echo $form->textField($model,'lokasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_pengaduan'); ?>
		<?php echo $form->textField($model,'jenis_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verifikasi'); ?>
		<?php echo $form->textField($model,'verifikasi',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->