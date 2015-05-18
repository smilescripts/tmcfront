<?php
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduans'=>array('index'),
	$model->kode_pengaduan,
);
?>
<div class="notifications success">
                            <p><span>Berhasil!</span> Terimakasih Atas Partisipasi Anda.</p>
                            <span class="closer">x</span>
                        </div>
<h1>View Pengaduan #<?php echo $model->kode_pengaduan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_pengaduan',
		'nama_pengadu',
		'email',
		'no_telp',
		'isi_pengaduan',
		'tanggal_pengaduan',
		'lokasi',
		'jenis_pengaduan',
		'verifikasi',
	),
)); ?>
