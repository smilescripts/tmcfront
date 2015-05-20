<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('admin'),
	'Manage',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#petugas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<h3>Kelola data Petugas</h3>

<hr/>
<a href="index.php?r=Petugas/create" class="btn btn-info">Tambah Data Petugas</a>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'petugas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_petugas',
		'nama_petugas',
		'username',
		//'password',
		'email',
		//'last_login',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}',
		),
	),
)); ?>
