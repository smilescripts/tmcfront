<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	'Create',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Tambah Jadwal Sim </h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>