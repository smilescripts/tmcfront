<?php
/* @var $this KontenBeritaController */
/* @var $model KontenBerita */

$this->breadcrumbs=array(
	'Konten Beritas'=>array('index'),
	$model->kode_konten,
);

$this->menu=array(
	array('label'=>'List KontenBerita', 'url'=>array('index')),
	array('label'=>'Create KontenBerita', 'url'=>array('create')),
	array('label'=>'Update KontenBerita', 'url'=>array('update', 'id'=>$model->kode_konten)),
	array('label'=>'Delete KontenBerita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_konten),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KontenBerita', 'url'=>array('admin')),
);
?>

<h1>View KontenBerita #<?php echo $model->kode_konten; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_konten',
		'kode_berita',
		'file_konten',
	),
)); ?>
