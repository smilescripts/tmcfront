<?php
/* @var $this KontenBeritaController */
/* @var $data KontenBerita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_konten')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_konten), array('view', 'id'=>$data->kode_konten)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_berita')); ?>:</b>
	<?php echo CHtml::encode($data->kode_berita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_konten')); ?>:</b>
	<?php echo CHtml::encode($data->file_konten); ?>
	<br />


</div>