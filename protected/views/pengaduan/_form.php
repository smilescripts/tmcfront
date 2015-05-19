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

	<div class="form">
		<?php echo $form->labelEx($model,'kode_pengaduan'); ?>
		<div class="input">
		<?php echo $form->textField($model,'kode_pengaduan',array('size'=>20,
			'maxlength'=>20,'value' => (($model->isNewRecord) ? $model->generateid_pengaduan() : $Pengaduan->no), 'readonly'=>true)); ?>
		<?php echo $form->error($model,'kode_pengaduan'); ?>
		</div>
	</div>

	<div class="form">
		<?php echo $form->labelEx($model,'nama_pengadu'); ?>
		<div class="input">
		<?php echo $form->textField($model,'nama_pengadu'); ?>
		<?php echo $form->error($model,'nama_pengadu'); ?>
		</div>
	</div>

	<div class="form">
		<?php echo $form->labelEx($model,'email'); ?>
		<div class="input">
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="form">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<div class="input">
		<?php echo $form->textField($model,'no_telp'); ?>
		<?php echo $form->error($model,'no_telp'); ?>
		</div>
	</div>

	<div class="form">
		<?php echo $form->labelEx($model,'isi_pengaduan'); ?>
		<div class="input">
		<?php echo $form->textArea($model,'isi_pengaduan',array('rows'=>1,'cols'=>11)); ?>
		<?php echo $form->error($model,'isi_pengaduan'); ?>
		</div>
	</div>
	<?php echo $form->hiddenField($model,'tanggal_pengaduan',array('value'=>date("Y-m-d H:i:s"))); ?>
	<?php echo $form->hiddenField($model,'verifikasi',array('value'=>"Menunggu")); ?>

	<div class="form">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<div class="input">
		<?php echo $form->textField($model,'lokasi'); ?>
		<?php echo $form->error($model,'lokasi'); ?>
		</div>
	</div>

	<div class="form">
		<?php echo $form->labelEx($model,'jenis_pengaduan'); ?>
		<div class="input">
		<?php echo $form->dropDownList($model,'jenis_pengaduan', CHtml::listData(
                    JenisPengaduan::model()->findAll(), 'kode_jenis', 'nama_jenis'),
			array(
				'empty' => '=== Pilih Jenis Pengaduan =='
			)
		); ?>
		<?php echo $form->error($model,'jenis_pengaduan'); ?>
		</div>
	</div>
	<br/>
	<div class="form2">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->