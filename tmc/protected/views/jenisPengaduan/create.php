<?php
/* @var $this JenisPengaduanController */
/* @var $model JenisPengaduan */

$this->breadcrumbs=array(
	'Jenis Pengaduans'=>array('index'),
	'Create',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Tambah Jenis Pengaduan</h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>