<?php
/* @var $this JadwalSimController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwal Sims',
);

$this->menu=array(
	array('label'=>'Create JadwalSim', 'url'=>array('create')),
	array('label'=>'Manage JadwalSim', 'url'=>array('admin')),
);
?>

<h1>Jadwal Sims</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
