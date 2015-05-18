<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profil-instansi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'visi'); ?>
		<?php echo $form->textArea($model,'visi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'visi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'misi'); ?>
		<?php echo $form->textArea($model,'misi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'misi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profil_lainnya'); ?>
		<?php echo $form->textArea($model,'profil_lainnya',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'profil_lainnya'); ?>
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