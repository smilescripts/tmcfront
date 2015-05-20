<?php
/* @var $this KontakInformasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kontak Informasis',
);

$this->menu=array(
	array('label'=>'Create KontakInformasi', 'url'=>array('create')),
	array('label'=>'Manage KontakInformasi', 'url'=>array('admin')),
);
?>

<h1>Kontak Informasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
