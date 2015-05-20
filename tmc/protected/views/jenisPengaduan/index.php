<?php
/* @var $this JenisPengaduanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jenis Pengaduans',
);

$this->menu=array(
	array('label'=>'Create JenisPengaduan', 'url'=>array('create')),
	array('label'=>'Manage JenisPengaduan', 'url'=>array('admin')),
);
?>

<h1>Jenis Pengaduans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
