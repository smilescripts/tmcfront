<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_profil'); ?>
		<?php echo $form->textField($model,'kode_profil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visi'); ?>
		<?php echo $form->textArea($model,'visi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'misi'); ?>
		<?php echo $form->textArea($model,'misi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profil_lainnya'); ?>
		<?php echo $form->textArea($model,'profil_lainnya',array('rows'=>6, 'cols'=>50)); ?>
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