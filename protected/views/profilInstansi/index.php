<?php
/* @var $this ProfilInstansiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profil Instansis',
);


?>

<h5 style="color:black">Visi Dan Misi</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
