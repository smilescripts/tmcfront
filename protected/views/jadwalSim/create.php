<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JadwalSim', 'url'=>array('index')),
	array('label'=>'Manage JadwalSim', 'url'=>array('admin')),
);
?>

<h1>Create JadwalSim</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>