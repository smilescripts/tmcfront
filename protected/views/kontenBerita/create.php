<?php
/* @var $this KontenBeritaController */
/* @var $model KontenBerita */

$this->breadcrumbs=array(
	'Konten Beritas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KontenBerita', 'url'=>array('index')),
	array('label'=>'Manage KontenBerita', 'url'=>array('admin')),
);
?>

<h1>Create KontenBerita</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>