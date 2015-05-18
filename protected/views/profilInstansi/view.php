<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */

$this->breadcrumbs=array(
	'Profil Instansis'=>array('index'),
	$model->kode_profil,
);

$this->menu=array(
	array('label'=>'List ProfilInstansi', 'url'=>array('index')),
	array('label'=>'Create ProfilInstansi', 'url'=>array('create')),
	array('label'=>'Update ProfilInstansi', 'url'=>array('update', 'id'=>$model->kode_profil)),
	array('label'=>'Delete ProfilInstansi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_profil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfilInstansi', 'url'=>array('admin')),
);
?>

<h1>View ProfilInstansi #<?php echo $model->kode_profil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_profil',
		'visi',
		'misi',
		'profil_lainnya',
		'oleh_petugas',
	),
)); ?>
