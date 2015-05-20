<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
	<style>
	.logokeren{
	position:absolute;
	margin-left:900px;

	
	
	
	}
	
	
	</style>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Beranda', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Data Berita', 'url'=>array('/Berita/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Data Pengaduan', 'url'=>array('/Pengaduan/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Data Jadwal', 'url'=>array('/JadwalSim/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Data Petugas', 'url'=>array('/Petugas/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Data Informasi', 'url'=>array('/ProfilInstansi/admin'), 'visible'=>!Yii::app()->user->isGuest),
			
				//	array('label'=>'Laporan', 'url'=>array('#')),
               
			
                array('label'=>'Keluar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page" >

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
<hr/>
	<div id="footer">
	<center>
		Copyright &copy; <?php echo date('Y'); ?> TMC BANDUNG.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</center>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
