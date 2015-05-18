<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->kode_berita=>array('view','id'=>$model->kode_berita),
	'Update',
);

$this->menu=array(
	array('label'=>'List Berita', 'url'=>array('index')),
	array('label'=>'Create Berita', 'url'=>array('create')),
	array('label'=>'View Berita', 'url'=>array('view', 'id'=>$model->kode_berita)),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>Update Berita <?php echo $model->kode_berita; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>