<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */

$this->breadcrumbs=array(
	'Kategori Beritas'=>array('index'),
	$model->kode_kategori,
);

$this->menu=array(
	array('label'=>'List KategoriBerita', 'url'=>array('index')),
	array('label'=>'Create KategoriBerita', 'url'=>array('create')),
	array('label'=>'Update KategoriBerita', 'url'=>array('update', 'id'=>$model->kode_kategori)),
	array('label'=>'Delete KategoriBerita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_kategori),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KategoriBerita', 'url'=>array('admin')),
);
?>

<h1>View KategoriBerita #<?php echo $model->kode_kategori; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_kategori',
		'nama_kategori',
		'oleh_petugas',
	),
)); ?>
