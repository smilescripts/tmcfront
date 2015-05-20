<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */
/* @var $form CActiveForm */
?>

<div class="form" >

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategoriberita-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom Dengan <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'nama_kategori'); ?>
		<?php echo $form->textField($model,'nama_kategori',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_kategori'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		
		<?php echo $form->hiddenField($model,'oleh_petugas',array('size'=>20,'value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>
	<br/>
	<div class="btn btn-info">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Ubah'); ?>
	</div>
	<div  class="btn btn-danger" >
		<a href="index.php?r=Berita/admin" style="color:white" >Batal Simpan</a>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->