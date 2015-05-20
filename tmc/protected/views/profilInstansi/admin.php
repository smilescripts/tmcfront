<?php
/* @var $this ProfilInstansiController */
/* @var $model ProfilInstansi */

$this->breadcrumbs=array(
	'Profil Instansi'=>array('admin'),
	'Kelola',
);

echo'<img class="logokeren"  src="images/logo_tmc.PNG"></img>';


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profil-instansi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h3>Kelola data Kontak Instansi</h3>

<hr/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'KontakInformasi-grid',
	'dataProvider'=>$KontakInformasi->search(),
	'filter'=>$KontakInformasi,
	'columns'=>array(
	
		'alamat',
		'no_telepon',
		'email',
		'fax',
		'facebook',
		
		'twitter',
		/*'oleh_petugas',
		*/
		array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template' => '{update} ',
				'buttons' => array(
				
				'update' => array(
					'url' => 'Yii::app()->createUrl("/KontakInformasi/update", array("id" => $data->kode_kontak))',
				),
               
			)
		),
	),
)); ?>
<hr/>
<h3>Kelola data Profil Instansi</h3>

<hr/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'type' => 'striped bordered condensed',
	'template'=>"{items}\n{pager}",
	'id'=>'profil-instansi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	
		'visi:html',
		'misi:html',
		'profil_lainnya:html',
		//'oleh_petugas',
		array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{update}',
		),
	),
)); ?>
