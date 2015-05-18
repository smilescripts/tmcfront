<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduans'=>array('index'),
	$model->kode_pengaduan,
);

$this->menu=array(
	array('label'=>'List Pengaduan', 'url'=>array('index')),
	array('label'=>'Create Pengaduan', 'url'=>array('create')),
	array('label'=>'Update Pengaduan', 'url'=>array('update', 'id'=>$model->kode_pengaduan)),
	array('label'=>'Delete Pengaduan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_pengaduan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengaduan', 'url'=>array('admin')),
);
?>

<h1>View Pengaduan #<?php echo $model->kode_pengaduan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_pengaduan',
		'nama_pengadu',
		'email',
		'no_telp',
		'isi_pengaduan',
		'tanggal_pengaduan',
		'lokasi',
		'jenis_pengaduan',
		'verifikasi',
	),
)); ?>
