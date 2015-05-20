<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduan'=>array('admin'),
	'Kelola',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pengaduan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h3>Kelola Jenis Pengaduan</h3>

<hr/>

<a href="index.php?r=Jenispengaduan/create" class="btn btn-info">Tambah Jenis Pengaduan</a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'JenisPengaduan-grid',
	'dataProvider'=>$JenisPengaduan->search(),
	'filter'=>$JenisPengaduan,
	'columns'=>array(
		'kode_jenis',
		'nama_jenis',
		'oleh_petugas',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}',
			'buttons' => array(
				
				'update' => array(
					'url' => 'Yii::app()->createUrl("/Jenispengaduan/update", array("id" => $data->kode_jenis))',
				),
               
			)
			
		),
	),
)); ?>
<hr/>
<h3>Kelola Data Pengaduan</h3>

<hr/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'pengaduan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_pengaduan',
		'nama_pengadu',
		//'email',
		'no_telp',
		//'isi_pengaduan',
		'tanggal_pengaduan',
		//'lokasi',
		'jenis_pengaduan',
		'verifikasi',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
