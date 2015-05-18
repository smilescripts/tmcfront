<?php
/* @var $this JadwalSimController */
/* @var $data JadwalSim */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_jadwal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_jadwal), array('view', 'id'=>$data->kode_jadwal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dari_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->dari_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sampai_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->sampai_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dari_jam')); ?>:</b>
	<?php echo CHtml::encode($data->dari_jam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sampai_jam')); ?>:</b>
	<?php echo CHtml::encode($data->sampai_jam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_tempat')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi_tempat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('oleh_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->oleh_petugas); ?>
	<br />

	*/ ?>

</div>