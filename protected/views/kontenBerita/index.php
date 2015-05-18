<?php
/* @var $this KontenBeritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Konten Beritas',
);

$this->menu=array(
	array('label'=>'Create KontenBerita', 'url'=>array('create')),
	array('label'=>'Manage KontenBerita', 'url'=>array('admin')),
);
?>

<h1>Konten Beritas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
