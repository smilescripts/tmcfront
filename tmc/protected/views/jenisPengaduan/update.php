<?php
/* @var $this JenisPengaduanController */
/* @var $model JenisPengaduan */

$this->breadcrumbs=array(
	'Jenis Pengaduans'=>array('index'),
	$model->kode_jenis=>array('view','id'=>$model->kode_jenis),
	'Update',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Ubah Jenis Pengaduan <?php echo $model->kode_jenis; ?></h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>