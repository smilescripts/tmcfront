<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */

$this->breadcrumbs=array(
	'Kontak Informasis'=>array('index'),
	$model->kode_kontak=>array('view','id'=>$model->kode_kontak),
	'Update',
);

$this->menu=array(
	array('label'=>'List KontakInformasi', 'url'=>array('index')),
	array('label'=>'Create KontakInformasi', 'url'=>array('create')),
	array('label'=>'View KontakInformasi', 'url'=>array('view', 'id'=>$model->kode_kontak)),
	array('label'=>'Manage KontakInformasi', 'url'=>array('admin')),
);
?>

<h1>Update KontakInformasi <?php echo $model->kode_kontak; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>