<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduans'=>array('index'),
	'Create',
);
?>

<h1>Create Pengaduan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>