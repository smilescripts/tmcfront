<?php
/* @var $this BeritaController */
/* @var $data Berita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_berita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_berita), array('view', 'id'=>$data->kode_berita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_berita')); ?>:</b>
	<?php echo CHtml::encode($data->judul_berita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_berita')); ?>:</b>
	<?php echo CHtml::encode($data->isi_berita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_posting')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_posting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oleh_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->oleh_petugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_berita')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_berita); ?>
	<br />


</div>