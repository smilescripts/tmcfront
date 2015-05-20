<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	$model->kode_jadwal=>array('view','id'=>$model->kode_jadwal),
	'Update',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Ubah Jadwal <?php echo $model->kode_jadwal; ?></h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>