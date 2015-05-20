<?php
/* @var $this KategoriBeritaController */
/* @var $data KategoriBerita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kategori')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_kategori), array('view', 'id'=>$data->kode_kategori)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oleh_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->oleh_petugas); ?>
	<br />


</div>