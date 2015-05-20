<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('index'),
	$model->kode_petugas=>array('view','id'=>$model->kode_petugas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Petugas', 'url'=>array('index')),
	array('label'=>'Create Petugas', 'url'=>array('create')),
	array('label'=>'View Petugas', 'url'=>array('view', 'id'=>$model->kode_petugas)),
	array('label'=>'Manage Petugas', 'url'=>array('admin')),
);
?>

<h1>Update Petugas <?php echo $model->kode_petugas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>