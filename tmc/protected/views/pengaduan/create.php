<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengaduan', 'url'=>array('index')),
	array('label'=>'Manage Pengaduan', 'url'=>array('admin')),
);
?>

<h1>Create Pengaduan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>