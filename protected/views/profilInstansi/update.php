<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */

$this->breadcrumbs=array(
	'Profil Instansis'=>array('index'),
	$model->kode_profil=>array('view','id'=>$model->kode_profil),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfilInstansi', 'url'=>array('index')),
	array('label'=>'Create ProfilInstansi', 'url'=>array('create')),
	array('label'=>'View ProfilInstansi', 'url'=>array('view', 'id'=>$model->kode_profil)),
	array('label'=>'Manage ProfilInstansi', 'url'=>array('admin')),
);
?>

<h1>Update ProfilInstansi <?php echo $model->kode_profil; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>