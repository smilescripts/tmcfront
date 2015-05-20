<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */

$this->breadcrumbs=array(
	'Profil Instansis'=>array('index'),
	$model->kode_profil=>array('view','id'=>$model->kode_profil),
	'Update',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Profil Instansi <?php echo $model->kode_profil; ?></h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>