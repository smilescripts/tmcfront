<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_jadwal'); ?>
		<?php echo $form->textField($model,'kode_jadwal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dari_tanggal'); ?>
		<?php echo $form->textField($model,'dari_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sampai_tanggal'); ?>
		<?php echo $form->textField($model,'sampai_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dari_jam'); ?>
		<?php echo $form->textField($model,'dari_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sampai_jam'); ?>
		<?php echo $form->textField($model,'sampai_jam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi_tempat'); ?>
		<?php echo $form->textArea($model,'lokasi_tempat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oleh_petugas'); ?>
		<?php echo $form->textField($model,'oleh_petugas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->