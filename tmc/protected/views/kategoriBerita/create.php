<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */

$this->breadcrumbs=array(
	'Kategori Beritas'=>array('create'),
	'Form',
);
echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';


?>

<h3>Form Tambah Kategori Berita</h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>