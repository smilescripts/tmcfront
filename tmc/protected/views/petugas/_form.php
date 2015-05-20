<?php
/* @var $this PetugasController */
/* @var $model Petugas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'petugas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'kode_petugas'); ?>
		<?php echo $form->textField($model,'kode_petugas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kode_petugas'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'nama_petugas'); ?>
		<?php echo $form->textField($model,'nama_petugas',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_petugas'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordfield($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>



		<br/>
	<div class="btn btn-info">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Ubah'); ?>
	</div>
	<div  class="btn btn-danger" >
		<a href="index.php?r=Petugas/admin" style="color:white" >Batal Simpan</a>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->