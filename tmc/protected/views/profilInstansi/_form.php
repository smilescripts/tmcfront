<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */
/* @var $form CActiveForm */
?>
<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">

if ( typeof CKEDITOR == 'undefined' )
{
    document.write(
        'CKEditor not found');
}
else
{
    var editor = CKEDITOR.replace( 'editor1' );   

   
    CKFinder.setupCKEditor( editor, '' ) ;

   
}
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profil-instansi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'visi'); ?>
		<?php echo $form->textArea($model,'visi',array('class'=>"ckeditor")); ?>
		<?php echo $form->error($model,'visi'); ?>
	</div><hr/>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'misi'); ?>
		<?php echo $form->textArea($model,'misi',array('class'=>"ckeditor")); ?>
		<?php echo $form->error($model,'misi'); ?>
	</div><hr/>

	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'profil_lainnya'); ?>
		<?php echo $form->textArea($model,'profil_lainnya',array('class'=>"ckeditor")); ?>
		<?php echo $form->error($model,'profil_lainnya'); ?>
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