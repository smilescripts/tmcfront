<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	'Create',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Tambah  Berita</h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>