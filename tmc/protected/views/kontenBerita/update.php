<?php
/* @var $this KontenBeritaController */
/* @var $model KontenBerita */

$this->breadcrumbs=array(
	'Konten Beritas'=>array('index'),
	$model->kode_konten=>array('view','id'=>$model->kode_konten),
	'Update',
);

$this->menu=array(
	array('label'=>'List KontenBerita', 'url'=>array('index')),
	array('label'=>'Create KontenBerita', 'url'=>array('create')),
	array('label'=>'View KontenBerita', 'url'=>array('view', 'id'=>$model->kode_konten)),
	array('label'=>'Manage KontenBerita', 'url'=>array('admin')),
);
?>

<h1>Update KontenBerita <?php echo $model->kode_konten; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>