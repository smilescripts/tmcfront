<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */

$this->breadcrumbs=array(
	'Profil Instansis'=>array('index'),
	$model->kode_profil,
);

$this->menu=array(
	array('label'=>'kelola Profil Instansi', 'url'=>array('admin')),
);
?>


<h3>Data Profil Instansi #<?php echo $model->kode_profil; ?> berhasil Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_profil',
		'visi:html',
		'misi:html',
		'profil_lainnya:html',
		'oleh_petugas',
	),
)); ?>
