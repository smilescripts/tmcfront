<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */

$this->breadcrumbs=array(
	'Kontak Informasis'=>array('index'),
	$model->kode_kontak=>array('view','id'=>$model->kode_kontak),
	'Update',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Kontak Informasi <?php echo $model->kode_kontak; ?></h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>