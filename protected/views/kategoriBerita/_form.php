<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategori-berita-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kategori'); ?>
		<?php echo $form->textField($model,'nama_kategori',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oleh_petugas'); ?>
		<?php echo $form->textField($model,'oleh_petugas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->