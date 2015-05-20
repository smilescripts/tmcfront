<?php
/* @var $this KategoriBeritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategori Beritas',
);

$this->menu=array(
	array('label'=>'Create KategoriBerita', 'url'=>array('create')),
	array('label'=>'Manage KategoriBerita', 'url'=>array('admin')),
);
?>

<h1>Kategori Beritas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
