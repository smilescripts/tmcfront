<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sim'=>array('admin'),
	'Kelola',
);
echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

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

<h3>Kelola data Jadwal Sim</h3>

<hr/>
<a href="index.php?r=JadwalSim/create" class="btn btn-info">Tambah Data Jadwal SIM</a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'jadwal-sim-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_jadwal',
		'dari_tanggal',
		'sampai_tanggal',
		'dari_jam',
		'sampai_jam',
		'lokasi_tempat',
		/*
		'keterangan',
		'oleh_petugas',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
