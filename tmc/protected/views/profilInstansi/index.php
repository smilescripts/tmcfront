<?php
/* @var $this ProfilInstansiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profil Instansis',
);

$this->menu=array(
	array('label'=>'Create ProfilInstansi', 'url'=>array('create')),
	array('label'=>'Manage ProfilInstansi', 'url'=>array('admin')),
);
?>

<h1>Profil Instansis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
