<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */

$this->breadcrumbs=array(
	'Kategori Beritas'=>array('index'),
	$model->kode_kategori=>array('view','id'=>$model->kode_kategori),
	'Update',
);

$this->menu=array(
	array('label'=>'List KategoriBerita', 'url'=>array('index')),
	array('label'=>'Create KategoriBerita', 'url'=>array('create')),
	array('label'=>'View KategoriBerita', 'url'=>array('view', 'id'=>$model->kode_kategori)),
	array('label'=>'Manage KategoriBerita', 'url'=>array('admin')),
);
?>

<h1>Update KategoriBerita <?php echo $model->kode_kategori; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>