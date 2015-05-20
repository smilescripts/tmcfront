<?php
/* @var $this KontakInformasiController */
/* @var $data KontakInformasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kontak')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_kontak), array('view', 'id'=>$data->kode_kontak)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telepon')); ?>:</b>
	<?php echo CHtml::encode($data->no_telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php echo CHtml::encode($data->twitter); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('oleh_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->oleh_petugas); ?>
	<br />

	*/ ?>

</div>