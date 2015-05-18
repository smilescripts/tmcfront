<?php
/* @var $this PengaduanController */
/* @var $data Pengaduan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_pengaduan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_pengaduan), array('view', 'id'=>$data->kode_pengaduan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pengadu')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pengadu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_pengaduan')); ?>:</b>
	<?php echo CHtml::encode($data->isi_pengaduan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pengaduan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pengaduan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_pengaduan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_pengaduan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verifikasi')); ?>:</b>
	<?php echo CHtml::encode($data->verifikasi); ?>
	<br />

	*/ ?>

</div>