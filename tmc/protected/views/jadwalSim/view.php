<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	$model->kode_jadwal,
);

$this->menu=array(
	array('label'=>'Tambah Jadwal Sim', 'url'=>array('create')),
	array('label'=>'Ubah JadwalSim', 'url'=>array('update', 'id'=>$model->kode_jadwal)),
	array('label'=>'Hapus JadwalSim', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_jadwal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola JadwalSim', 'url'=>array('admin')),
);
?>

<h3>Data Jadwal #<?php echo $model->kode_jadwal; ?> berhasil Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_jadwal',
		'dari_tanggal',
		'sampai_tanggal',
		'dari_jam',
		'sampai_jam',
		'lokasi_tempat',
		'keterangan',
		'oleh_petugas',
	),
)); ?>
