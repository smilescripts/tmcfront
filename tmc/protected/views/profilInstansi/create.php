<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */

$this->breadcrumbs=array(
	'Profil Instansis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfilInstansi', 'url'=>array('index')),
	array('label'=>'Manage ProfilInstansi', 'url'=>array('admin')),
);
?>

<h1>Create ProfilInstansi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>