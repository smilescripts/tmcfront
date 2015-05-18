<?php
/* @var $this JadwalSimController */
/* @var $model JadwalSim */

$this->breadcrumbs=array(
	'Jadwal Sims'=>array('index'),
	$model->kode_jadwal,
);
?>

<h1>Jadwal Sim Keliling #<?php echo $model->kode_jadwal; ?></h1>
<hr />
<h2>Lokasi</h2>
<div class="outerwide" >
                        	<ul class="wnews" id="carousel2">
                            	<li>
                             <iframe
    width="100%"
    height="660px"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCJg5Vf56KX370PNral6Z3SC4x7MhkwBhU
      &q=<?php echo $model->lokasi_tempat; ?>+Bandung, Jawa Barat, Indonesia
	  &zoom=16
      &attribution_source=Google+Maps+Embed+API
    ">
  </iframe>
                            </ul>
                        </div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_jadwal',
		'dari_tanggal',
		'sampai_tanggal',
		'dari_jam',
		'sampai_jam',
		'lokasi_tempat',
		'keterangan',
		//'oleh_petugas',
	),
)); ?>
