<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengaduan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_pengaduan'); ?>
		<?php echo $form->textField($model,'kode_pengaduan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kode_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pengadu'); ?>
		<?php echo $form->textField($model,'nama_pengadu'); ?>
		<?php echo $form->error($model,'nama_pengadu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp'); ?>
		<?php echo $form->error($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi_pengaduan'); ?>
		<?php echo $form->textField($model,'isi_pengaduan'); ?>
		<?php echo $form->error($model,'isi_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_pengaduan'); ?>
		<?php echo $form->textField($model,'tanggal_pengaduan'); ?>
		<?php echo $form->error($model,'tanggal_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textField($model,'lokasi'); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_pengaduan'); ?>
		<?php echo $form->textField($model,'jenis_pengaduan'); ?>
		<?php echo $form->error($model,'jenis_pengaduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verifikasi'); ?>
		<?php echo $form->textField($model,'verifikasi',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'verifikasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->