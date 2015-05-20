<?php
/* @var $this JenisPengaduanController */
/* @var $model JenisPengaduan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_jenis'); ?>
		<?php echo $form->textField($model,'kode_jenis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jenis'); ?>
		<?php echo $form->textField($model,'nama_jenis',array('size'=>60,'maxlength'=>100)); ?>
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