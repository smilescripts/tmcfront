<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */

$this->breadcrumbs=array(
	'Kategori Beritas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KategoriBerita', 'url'=>array('index')),
	array('label'=>'Manage KategoriBerita', 'url'=>array('admin')),
);
?>

<h1>Create KategoriBerita</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>