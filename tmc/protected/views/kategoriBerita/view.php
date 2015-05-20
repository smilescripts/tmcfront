<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */

$this->breadcrumbs=array(
	'Kategori Beritas'=>array('index'),
	$model->kode_kategori,
);

$this->menu=array(
	array('label'=>'Tambah Kategori Berita', 'url'=>array('create')),
	array('label'=>'Ubah Kategori Berita', 'url'=>array('update', 'id'=>$model->kode_kategori)),
	array('label'=>'Hapus Kategori Berita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_kategori),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola KategoriBerita', 'url'=>array('Berita/admin')),
);
?>

<h3>Data Kategori #<?php echo $model->kode_kategori; ?> Tersimpan</h3><hr/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'nama_kategori',
		'oleh_petugas',
	),
)); ?>
