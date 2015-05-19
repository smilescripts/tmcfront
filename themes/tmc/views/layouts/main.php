<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php
	$baseUrl = Yii::app()->theme->baseUrl;
	  ?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="News - Clean HTML5 and CSS3 responsive template">
<meta name="author" content="MyPassion">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>TMC - BANDUNG</title>

<link rel="shortcut icon" href="img/sms-4.ico" />

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/superfish.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/fontello/fontello.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/base.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/devices/1000.css" media="only screen and (min-width: 768px) and (max-width: 1000px)" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/devices/767.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/devices/479.css" media="only screen and (min-width: 200px) and (max-width: 479px)" />
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]> <script type="text/javascript" src="js/customM.js"></script> <![endif]-->


</head>

<body>

<!-- Body Wrapper -->
<div class="body-wrapper">
	<div class="controller">
    <div class="controller2">

        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="column">
                    <div class="logo">
					  <a href="index.html"><img src="<?php echo $baseUrl;?>/img/LOGO LANTAS.png" alt="MyPassion" style="position:absolute" /></a>
					 
					</div>
					 <div class="logo2">
					  <a href="index.html"><img src="<?php echo $baseUrl;?>/img/polda_logo.png" alt="MyPassion" style="position:absolute" /></a>
					 </div>
					<BR/>
                    <CENTER >
                       <h2 style="margin-left:140px;color:black">TRAFFIC MANAGEMENT CENTER<br/>SATLANTAS POLRESTABES<br/><div  style="margin-left:-130px">BANDUNG</div></h2>
					   <p>Jln.Jawa no.1 telp 991</p>
                    </CENTER>
					
                    
                    <!-- Nav -->
                    <nav id="nav">
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php">Beranda.</a></li>
                          
                            <li><a href="index.php?r=profilInstansi/index">Visi Dan   Misi.</a></li>
                            <li><a href="index.php?r=jadwalSim/admin">Info Sim Keliling.</a></li>
                            <li><a href="index.php?r=kontakInformasi/index">Kontak Kami.</a></li>
                            <li><a href="index.php?r=pengaduan/create">Keluhan Masyarakat.</a></li>
                         
                          
                            <li><a href="#">Peta Kota Bandung.</a></li>
                        </ul>
                        
                    </nav>
                    <!-- /Nav -->
                </div>
            </div>
        </header>
        <!-- /Header -->
        
        <!-- Slider -->
		<?php if(!isset($_GET["r"])){?>
	    <section id="slider">
            <div class="container">
                <div class="main-slider">
                	<div class="badg">
                    	<p><a href="#" style="color:black">Popular.</a></p>
                    </div>
                	<div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo $baseUrl;?>/img/800-polisi-atur-lalu-lintas-saat-upacara-hut-ri-ke-69-di-istana.jpg" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Google wants more women in tech.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                  <img src="<?php echo $baseUrl;?>/img/polda_logo.jpg" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Small Businesses Surge against all expectations.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                  <img src="<?php echo $baseUrl;?>/img/TMC.jpg" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Drones: Future of disaster response?</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                 <img src="<?php echo $baseUrl;?>/img/polda_logo.jpg" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Hollywood cowboys' retreat. </a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                 <img src="<?php echo $baseUrl;?>/img/TMC.jpg" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Stress may cause cravings.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slider2">
                	<div class="badg">
                    	<p><a href="#" style="color:black">Latest.</a></p>
                    </div>
                    <a href="#"><img src="<?php echo $baseUrl;?>/img/polisi.jpg" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">We Are News.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed metus. </p>
                </div>
                
                <div class="slider3">
                	<a href="#"><img src="<?php echo $baseUrl;?>/img/polisi.jpg" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">Happy Birthday, blue jeans! </a></p>
                </div>
                
                <div class="slider3">
                	<a href="#"><img src="<?php echo $baseUrl;?>/img/polisi.jpg" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">Fantasy Family Photos </a></p>
                </div>
                
            </div>    
        </section>
		<?php } ?>
		
        <section id="content" >
            <div class="container">
            	<!-- Main Content -->
                <div class="main-content">
				<?php echo $content;?>
                 
                    <!-- /World News -->
                    
                    <!-- Popular News -->
                
                    <!-- /Popular News -->
                    
                </div>
                <!-- /Main Content -->
                
                <!-- Left Sidebar -->
                <div class="column-one-third">
                	<div class="sidebar">
                    	<h5 class="line"><span>Stay Connected.</span></h5>
                        <ul class="social">
                        	<li>
                            	<a href="#" class="facebook"><i class="icon-facebook"></i></a>
                                <span>6,800 <br/> <i>fans</i></span>
                            </li>
                            <li>
                            	<a href="#" class="twitter"><i class="icon-twitter"></i></a>
                                <span>12,475 <br/> <i>followers</i></span>
                            </li>
                            <li>
                            	<a href="#" class="rss"><i class="icon-rss"></i></a>
                                <span><i>Subscribe via rss</i></span>
                            </li>
                        </ul>
                    </div>
                    
                 
                    
               
                    
                    <div class="sidebar">
                    	<div id="tabs">
                            <ul>
                                <li><a href="#tabs1">Keluhan Masyarakat.</a></li>
                            
                            </ul>
                            <div id="tabs1">
                                <ul>
                                	<li>
                                    	<a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                    	<a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                    	<a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                    	<a href="#" class="title">Blandit Rutrum, Erat et Sagittis Adipcising Elit.</a>
                                        <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                  
                    
                 
                	
                    <div class="sidebar">
                    	<h5 class="line"><span>Facebook.</span></h5>
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=298&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23BCBCBC&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:298px; height:258px;" allowTransparency="true"></iframe>
                    </div>
					<div class="sidebar">
                    	<h5 class="line"><span>Twitter.</span></h5>
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=298&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23BCBCBC&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:298px; height:258px;" allowTransparency="true"></iframe>
                    </div>
                </div>
                <!-- /Left Sidebar -->
                
            </div>    
        </section>
        <!-- / Content -->
  
        <!-- Footer -->
        <footer id="footer">
            <div class="container">
            	
               
              
                <p class="copyright">Copyright 2015. TMC Bandung All Rights Reserved</p>
            </div>
        </footer>
        <!-- / Footer -->
    
    </div>
	</div>
</div>
<!-- / Body Wrapper -->


<!-- SCRIPTS -->
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/easing.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/ui.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/carouFredSel.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/customM.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/tweetable.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/timeago.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/mobilemenu.js"></script>

<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/mypassion.js"></script>

</body>
</html>
