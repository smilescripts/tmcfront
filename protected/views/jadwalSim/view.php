<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	$model->kode_jadwal,
);

$this->menu=array(
	array('label'=>'List JadwalSim', 'url'=>array('index')),
	array('label'=>'Create JadwalSim', 'url'=>array('create')),
	array('label'=>'Update JadwalSim', 'url'=>array('update', 'id'=>$model->kode_jadwal)),
	array('label'=>'Delete JadwalSim', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_jadwal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JadwalSim', 'url'=>array('admin')),
);
?>

<h1>View JadwalSim #<?php echo $model->kode_jadwal; ?></h1>

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
