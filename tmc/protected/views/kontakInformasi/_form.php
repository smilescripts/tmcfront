<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kontak-informasi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'no_telepon'); ?>
		<?php echo $form->textField($model,'no_telepon'); ?>
		<?php echo $form->error($model,'no_telepon'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textArea($model,'email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax'); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textArea($model,'facebook',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'twitter'); ?>
		<?php echo $form->textArea($model,'twitter',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'twitter'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		
			<?php echo $form->hiddenfield($model,'oleh_petugas',array('size'=>20,'value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

		<br/>
	<div class="btn btn-info">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Ubah'); ?>
	</div>
	<div  class="btn btn-danger" >
		<a href="index.php?r=profilInstansi/admin" style="color:white" >Batal Simpan</a>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->