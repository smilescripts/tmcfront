<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_kategori'); ?>
		<?php echo $form->textField($model,'kode_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kategori'); ?>
		<?php echo $form->textField($model,'nama_kategori',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oleh_petugas'); ?>
		<?php echo $form->textField($model,'oleh_petugas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->