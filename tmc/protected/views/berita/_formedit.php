<?php
/* @var $this BeritaController */
/* @var $model Berita */
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
	'id'=>'berita-form',
	'enableAjaxValidation'=>true,
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Kolom Dengan <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'kode_berita'); ?>
		<?php echo $form->textField($model,'kode_berita',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'kode_berita'); ?>
	</div>
	
	
	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'judul_berita'); ?>
		<?php echo $form->textField($model,'judul_berita'); ?>
		<?php echo $form->error($model,'judul_berita'); ?>
	</div>
	
	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'tanggal_posting'); ?>
		<?php echo $form->textField($model,'tanggal_posting',array('value'=>date("Y-m-d H:i:s"),'readonly'=>true)); ?>
		<?php echo $form->error($model,'tanggal_posting'); ?>
	</div>
	
	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'kategori_berita'); ?>
		 <?php echo CHtml::activeDropDownList($model,'kategori_berita', CHtml::listData(KategoriBerita::model()->findAll(), 'kode_kategori', 'nama_kategori'), array('empty' => '--- Pilih kategori Berita---')); ?>
		<?php echo $form->error($model,'kategori_berita'); ?>
	</div>
	
	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->fileField($model,'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>
	
	<div class="row" style="margin-left:1px">
		<?php echo $form->labelEx($model,'isi_berita'); ?>
		<?php echo $form->textarea($model,'isi_berita',array('class'=>"ckeditor")); ?>
		<?php echo $form->error($model,'isi_berita'); ?>
	</div>

	

	<div class="row" style="margin-left:1px">
		<?php echo $form->hiddenField($model,'oleh_petugas',array('size'=>20,'value'=>Yii::app()->user->name)); ?>
		<?php echo $form->error($model,'oleh_petugas'); ?>
	</div>

	<div class="row" style="margin-left:1px">
		
		<?php echo $form->hiddenField($model,'status',array('size'=>9,'value'=>"Aktif")); ?>
		<?php echo $form->error($model,'status'); ?>
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