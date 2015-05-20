<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->kode_berita,
);

$this->menu=array(
	array('label'=>'Tambah Berita', 'url'=>array('create')),
	array('label'=>'Ubah Berita', 'url'=>array('update', 'id'=>$model->kode_berita)),
	array('label'=>'Hapus Berita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_berita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Berita', 'url'=>array('admin')),
);
?>

<h3>Data Berita #<?php echo $model->kode_berita; ?> berhasil Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_berita',
		'kategoriBerita.nama_kategori',
		'judul_berita',
		'isi_berita:html',
		'tanggal_posting',
		'oleh_petugas',
		'status',
		
	),
)); ?>
