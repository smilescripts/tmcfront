<?php
/* @var $this JenisPengaduanController */
/* @var $model JenisPengaduan */

$this->breadcrumbs=array(
	'Jenis Pengaduans'=>array('index'),
	$model->kode_jenis,
);

$this->menu=array(
	array('label'=>'Tambah Jenis Pengaduan', 'url'=>array('create')),
	array('label'=>'Ubah JenisPengaduan', 'url'=>array('update', 'id'=>$model->kode_jenis)),
	array('label'=>'Hapus JenisPengaduan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_jenis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Pengaduan', 'url'=>array('Pengaduan/admin')),
);
?>

<h3>Data Jenis Pengaduan #<?php echo $model->kode_jenis; ?> berhasil Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_jenis',
		'nama_jenis',
		'oleh_petugas',
	),
)); ?>
