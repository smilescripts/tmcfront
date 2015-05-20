<?php
/* @var $this ProfilInstansiController */
/* @var $data ProfilInstansi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_profil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_profil), array('view', 'id'=>$data->kode_profil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visi')); ?>:</b>
	<?php echo CHtml::encode($data->visi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('misi')); ?>:</b>
	<?php echo CHtml::encode($data->misi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profil_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->profil_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oleh_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->oleh_petugas); ?>
	<br />


</div>