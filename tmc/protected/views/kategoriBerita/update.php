<?php
/* @var $this KategoriBeritaController */
/* @var $model KategoriBerita */

$this->breadcrumbs=array(
	'Kategori Beritas'=>array('index'),
	$model->kode_kategori=>array('view','id'=>$model->kode_kategori),
	'Update',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

?>

<h3>Form Ubah Kategori Berita <?php echo $model->kode_kategori; ?></h3><hr/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>