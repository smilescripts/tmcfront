<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
					   array('label'=>'Beranda', 'url'=>array('/site/index'),'linkOptions'=>array("data-description"=>"."),),
					   array('label'=>'Profil Kami', 'url'=>array('/site/index1'),'linkOptions'=>array("data-description"=>"."),),
					   array('label'=>'Informasi Berita', 'url'=>array('/site/index2'),'linkOptions'=>array("data-description"=>"."),),
					   array('label'=>'Kontak Kami', 'url'=>array('/site/index3'),'linkOptions'=>array("data-description"=>"."),),
					   array('label'=>'Info Jadwal Sim Keliling', 'url'=>array('/site/index4'),'linkOptions'=>array("data-description"=>"."),),
					   array('label'=>'Pengaduan Masyarakat', 'url'=>array('/site/index5'),'linkOptions'=>array("data-description"=>"."),),
					  
					 ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->