<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->kode_berita=>array('view','id'=>$model->kode_berita),
	'Update',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Ubah Berita <?php echo $model->kode_berita; ?></h3><hr/>

<?php echo $this->renderPartial('_formedit', array('model'=>$model)); ?>