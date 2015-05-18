<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwal-sim-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dari_tanggal'); ?>
		<?php echo $form->textField($model,'dari_tanggal'); ?>
		<?php echo $form->error($model,'dari_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sampai_tanggal'); ?>
		<?php echo $form->textField($model,'sampai_tanggal'); ?>
		<?php echo $form->error($model,'sampai_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dari_jam'); ?>
		<?php echo $form->textField($model,'dari_jam'); ?>
		<?php echo $form->error($model,'dari_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sampai_jam'); ?>
		<?php echo $form->textField($model,'sampai_jam'); ?>
		<?php echo $form->error($model,'sampai_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi_tempat'); ?>
		<?php echo $form->textArea($model,'lokasi_tempat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lokasi_tempat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oleh_petugas'); ?>
		<?php echo $form->textField($model,'oleh_petugas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->