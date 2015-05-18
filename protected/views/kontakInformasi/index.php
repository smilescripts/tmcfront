<?php
/* @var $this ProfilInstansiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kontak Kami',
);


?>

<h5 style="color:black">Kontak Kami</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
