<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	$model->kode_jadwal=>array('view','id'=>$model->kode_jadwal),
	'Update',
);

$this->menu=array(
	array('label'=>'List JadwalSim', 'url'=>array('index')),
	array('label'=>'Create JadwalSim', 'url'=>array('create')),
	array('label'=>'View JadwalSim', 'url'=>array('view', 'id'=>$model->kode_jadwal)),
	array('label'=>'Manage JadwalSim', 'url'=>array('admin')),
);
?>

<h1>Update JadwalSim <?php echo $model->kode_jadwal; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>