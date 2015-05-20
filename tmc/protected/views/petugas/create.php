<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('index'),
	'Create',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Tambah Petugas </h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>