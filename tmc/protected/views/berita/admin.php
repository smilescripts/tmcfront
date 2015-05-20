<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Berita'=>array('admin'),
	'Kelola',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#berita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Kelola Data Kategori Berita</h3>

<hr/>
<a href="index.php?r=kategoriBerita/create" class="btn btn-info">Tambah Kategori Berita</a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'kategoriberita-berita-grid',
	'dataProvider'=>$kategoriberita->search(),
	'filter'=>$kategoriberita,
	'columns'=>array(
		
		'nama_kategori',
		'oleh_petugas',
		array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template' => '{update} ',
				'buttons' => array(
				
				'update' => array(
					'url' => 'Yii::app()->createUrl("/Kategoriberita/update", array("id" => $data->kode_kategori))',
				),
               
			)
		),
	),
)); ?><hr/>
<h3>Kelola Data Berita</h3>

<hr/>
<a href="index.php?r=Berita/create" class="btn btn-info">Tambah Berita</a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'berita-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'kode_berita',
		'judul_berita',
		//'isi_berita:html',
		'tanggal_posting',
		'oleh_petugas',
		'status',
		/*
		'kategori_berita',
		*/
		array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template' => '{update}{view} ',
		),
	),
)); ?>
