<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */

$this->breadcrumbs=array(
	'Kontak Informasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KontakInformasi', 'url'=>array('index')),
	array('label'=>'Manage KontakInformasi', 'url'=>array('admin')),
);
?>

<h1>Create KontakInformasi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>