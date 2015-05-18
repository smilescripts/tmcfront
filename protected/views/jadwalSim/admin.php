<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jadwal-sim-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h5 style="color:black">Jadwal Sim Keliling</h5><hr/>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jadwal-sim-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'dari_tanggal',
		'sampai_tanggal',
		'dari_jam',
		'sampai_jam',
		'lokasi_tempat',
		/*
		'keterangan',
		'oleh_petugas',
		*/
		
	),
)); ?>
