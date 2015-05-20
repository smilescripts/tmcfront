<?php
/* @var $this JenisPengaduanController */
/* @var $model JenisPengaduan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-pengaduan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'nama_jenis'); ?>
		<?php echo $form->textField($model,'nama_jenis',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_jenis'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'oleh_petugas',array('size'=>20,'value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

	<br/>
	<div class="btn btn-info">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Ubah'); ?>
	</div>
	<div  class="btn btn-danger" >
		<a href="index.php?r=Pengaduan/admin" style="color:white" >Batal Simpan</a>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->