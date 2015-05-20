<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('index'),
	$model->kode_petugas,
);

$this->menu=array(
	array('label'=>'Tambah Petugas', 'url'=>array('create')),
	array('label'=>'Ubah Petugas', 'url'=>array('update', 'id'=>$model->kode_petugas)),
	array('label'=>'Hapus Petugas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_petugas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Petugas', 'url'=>array('admin')),
);
?>

<h3>Data Petugas #<?php echo $model->kode_petugas; ?> berhasil Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_petugas',
		'nama_petugas',
		'username',
		'password',
		'email',
		'last_login',
	),
)); ?>
