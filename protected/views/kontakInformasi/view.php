<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */

$this->breadcrumbs=array(
	'Kontak Informasis'=>array('index'),
	$model->kode_kontak,
);

$this->menu=array(
	array('label'=>'List KontakInformasi', 'url'=>array('index')),
	array('label'=>'Create KontakInformasi', 'url'=>array('create')),
	array('label'=>'Update KontakInformasi', 'url'=>array('update', 'id'=>$model->kode_kontak)),
	array('label'=>'Delete KontakInformasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_kontak),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KontakInformasi', 'url'=>array('admin')),
);
?>

<h1>View KontakInformasi #<?php echo $model->kode_kontak; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_kontak',
		'alamat',
		'no_telepon',
		'email',
		'fax',
		'facebook',
		'twitter',
		'oleh_petugas',
	),
)); ?>
