<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->kode_berita,
);

$this->menu=array(
	array('label'=>'List Berita', 'url'=>array('index')),
	array('label'=>'Create Berita', 'url'=>array('create')),
	array('label'=>'Update Berita', 'url'=>array('update', 'id'=>$model->kode_berita)),
	array('label'=>'Delete Berita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_berita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>View Berita #<?php echo $model->kode_berita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_berita',
		'judul_berita',
		'isi_berita',
		'tanggal_posting',
		'oleh_petugas',
		'status',
		'kategori_berita',
	),
)); ?>
