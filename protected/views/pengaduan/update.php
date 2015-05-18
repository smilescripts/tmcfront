<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduans'=>array('index'),
	$model->kode_pengaduan=>array('view','id'=>$model->kode_pengaduan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengaduan', 'url'=>array('index')),
	array('label'=>'Create Pengaduan', 'url'=>array('create')),
	array('label'=>'View Pengaduan', 'url'=>array('view', 'id'=>$model->kode_pengaduan)),
	array('label'=>'Manage Pengaduan', 'url'=>array('admin')),
);
?>

<h1>Update Pengaduan <?php echo $model->kode_pengaduan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>