<?php
/* @var $this JenisPengaduanController */
/* @var $data JenisPengaduan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_jenis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_jenis), array('view', 'id'=>$data->kode_jenis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jenis')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oleh_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->oleh_petugas); ?>
	<br />


</div>