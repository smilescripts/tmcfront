<?php
/* @var $this KontakInformasiController */
/* @var $model KontakInformasi */

$this->breadcrumbs=array(
	'Kontak Informasi'=>array('admin'),
	'Kelola',
);
echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kontak-informasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h3>Kelola data Kontak Informasi</h3>

<hr/>
<a href="" class="btn btn-info">Tambah Kontak Informasi</a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'kontak-informasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_kontak',
		'alamat',
		'no_telepon',
		'email',
		'fax',
		'facebook',
		/*
		'twitter',
		'oleh_petugas',
		*/
		array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
