<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */

$this->breadcrumbs=array(
	'Kontak Informasis'=>array('index'),
	$model->kode_kontak,
);

$this->menu=array(
array('label'=>'Kelola Kontak Informasi', 'url'=>array('ProfilInstansi/admin')),
);
?>


<h3>Data Kontak informasi #<?php echo $model->kode_kontak; ?> berhasil Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_kontak',
		'alamat',
		'no_telepon',
		'email',
		'fax',
		'facebook',
		'twitter',
		'oleh_petugas',
	),
)); ?>
