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

<title>News - Responsive HTML5 and CSS3 template</title>

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
                        <a href="index.html"><img src="<?php echo $baseUrl;?>/img/logo.png" alt="MyPassion" /></a>
                    </div>
                    
                    <div class="search">
                        <form action="" method="post">
                            <input type="text" value="Search." onblur="if(this.value=='') this.value='Search.';" onfocus="if(this.value=='Search.') this.value='';" class="ft"/>
                            <input type="submit" value="" class="fs">
                        </form>
                    </div>
                    
                    <!-- Nav -->
                    <nav id="nav">
                        <ul class="sf-menu">
                            <li class="current"><a href="index.html">Home.</a></li>
                            <li>
                            	<a href="#">Pages.</a>
                                <ul>
                                    <li><i class="icon-right-open"></i><a href="leftsidebar.html">Left Sidebar.</a></li>
                                    <li><i class="icon-right-open"></i><a href="reviews.html">Reviews.</a></li>
                                    <li><i class="icon-right-open"></i><a href="single.html">Single News.</a></li>
                                    <li><i class="icon-right-open"></i><a href="features.html">Features.</a></li>
                                    <li><i class="icon-right-open"></i><a href="contact.html">Contact.</a></li>
                                </ul>
                            </li>
                            <li><a href="reviews.html">World.</a></li>
                            <li><a href="reviews.html">Business.</a></li>
                            <li><a href="reviews.html">Politics.</a></li>
                            <li>
                                <a href="reviews.html">Sports.</a>
                                <ul>
                                    <li><i class="icon-right-open"></i><a href="#">Football.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Running.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Tennis.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Fitness.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Golf.</a></li>
                                    <li><i class="icon-right-open"></i><a href="#">Motosport.</a></li>
                                </ul>
                            </li>
                            <li><a href="reviews.html">Health.</a></li>
                            <li><a href="reviews.html">Science.</a></li>
                            <li><a href="reviews.html">Music.</a></li>
                            <li><a href="reviews.html">Tech.</a></li>
                        </ul>
                        
                    </nav>
                    <!-- /Nav -->
                </div>
            </div>
        </header>
        <!-- /Header -->
        
        <!-- Slider -->
        <section id="slider">
            <div class="container">
                <div class="main-slider">
                	<div class="badg">
                    	<p><a href="#">Popular.</a></p>
                    </div>
                	<div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo $baseUrl;?>/img/flexslider/1.png" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Google wants more women in tech.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="<?php echo $baseUrl;?>/img/flexslider/3.png" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Small Businesses Surge against all expectations.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="<?php echo $baseUrl;?>/img/flexslider/5.png" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Drones: Future of disaster response?</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="<?php echo $baseUrl;?>/img/flexslider/4.png" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Hollywood cowboys' retreat. </a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                            <li>
                                <img src="<?php echo $baseUrl;?>/img/flexslider/2.png" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">Stress may cause cravings.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slider2">
                	<div class="badg">
                    	<p><a href="#">Latest.</a></p>
                    </div>
                    <a href="#"><img src="<?php echo $baseUrl;?>/img/flexslider/6.png" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">We Are News.</a> Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut,  sodales sed metus. </p>
                </div>
                
                <div class="slider3">
                	<a href="#"><img src="<?php echo $baseUrl;?>/img/trash/3.png" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">Happy Birthday, blue jeans! </a></p>
                </div>
                
                <div class="slider3">
                	<a href="#"><img src="<?php echo $baseUrl;?>/img/trash/4.png" alt="MyPassion" /></a>
                    <p class="caption"><a href="#">Fantasy Family Photos </a></p>
                </div>
                
            </div>    
        </section>
        <!-- / Slider -->
        
        <!-- Content -->
        <section id="content">
            <div class="container">
            	<!-- Main Content -->
                <div class="main-content">
                	
                    <!-- Popular News -->
                	<div class="column-one-third">
                    	<h5 class="line"><span>Popular News.</span></h5>
                        <div class="outertight">
                        	<ul class="block">
                                <li>
                                    <a href="#"><img src="<?php echo $baseUrl;?>/img/trash/5.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo $baseUrl;?>/img/trash/6.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo $baseUrl;?>/img/trash/7.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:70%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo $baseUrl;?>/img/trash/8.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /Popular News -->
                    
                    <!-- Hot News -->
                    <div class="column-one-third">
                    	<h5 class="line"><span>Hot News.</span></h5>
                        <div class="outertight m-r-no">
                        	<ul class="block">
                                <li>
                                    <a href="#"><img src="<?php echo $baseUrl;?>/img/trash/9.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo $baseUrl;?>/img/trash/10.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/11.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:70%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/12.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /Hot News -->
                    
                    <!-- Life Style -->
                    <div class="column-two-third">
                    	<h5 class="line">
                        	<span>Life Style.</span>
                            <div class="navbar">
                                <a id="next1" class="next" href="#"><span></span></a>	
                                <a id="prev1" class="prev" href="#"><span></span></a>
                            </div>
                        </h5>
                        
                        <div class="outertight">
                        	<img src="img/trash/24.png" alt="MyPassion" />
                            <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem
Ipsum Dolor, Sit Amet Adipsing.</a></h6>
							<span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                        </div>
                        
                        <div class="outertight m-r-no">
                        	
                        	<ul class="block" id="carousel">
                                <li>
                                    <a href="#"><img src="img/trash/13.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/14.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/15.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:70%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/16.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/11.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:70%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/12.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Life Style -->
                    
                    <!-- World News -->
                    <div class="column-two-third">
                    	<h5 class="line">
                        	<span>World News.</span>
                            <div class="navbar">
                                <a id="next2" class="next" href="#"><span></span></a>	
                                <a id="prev2" class="prev" href="#"><span></span></a>
                            </div>
                        </h5>
                        
                        <div class="outerwide" >
                        	<ul class="wnews" id="carousel2">
                            	<li>
                                	<img src="img/trash/25.png" alt="MyPassion" class="alignleft" />
                                    <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                    <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                                </li>
                                <li>
                                	<img src="img/trash/24.png" alt="MyPassion" class="alignleft" />
                                    <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                    <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                                </li>
                                <li>
                                	<img src="img/trash/26.png" alt="MyPassion" class="alignleft" />
                                    <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                    <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="outerwide">
                        	<ul class="block2">
                                <li>
                                    <a href="#"><img src="img/trash/17.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="#"><img src="img/trash/18.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/19.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:70%;"></span></span>
                                </li>
                                <li class="m-r-no">
                                    <a href="#"><img src="img/trash/20.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:60%;"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /World News -->
                    
                    <!-- Popular News -->
                	<div class="column-two-third">
                    	<div class="outertight">
                        	<h5 class="line"><span>Business News.</span></h5>
                            
                            <div class="outertight m-r-no">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="img/trash/25.png" alt="MyPassion" />
                                        </li>
                                        <li>
                                            <img src="img/trash/24.png" alt="MyPassion" />
                                        </li>
                                        <li>
                                            <img src="img/trash/26.png" alt="MyPassion" />
                                        </li>
                                    </ul>
                                </div>
                                
                                <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem
    Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
    dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                            </div>
                            
                            <ul class="block">
                                <li>
                                    <a href="#"><img src="img/trash/21.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/20.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="outertight m-r-no">
                        	<h5 class="line"><span>Sport News.</span></h5>
                            
                            <div class="outertight m-r-no">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="img/trash/27.png" alt="MyPassion" />
                                        </li>
                                        <li>
                                            <img src="img/trash/26.png" alt="MyPassion" />
                                        </li>
                                        <li>
                                            <img src="img/trash/24.png" alt="MyPassion" />
                                        </li>
                                    </ul>
                                </div>
                                
                                <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem
    Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
    dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                            </div>
                            
                            <ul class="block">
                                <li>
                                    <a href="#"><img src="img/trash/23.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:80%;"></span></span>
                                </li>
                                <li>
                                    <a href="#"><img src="img/trash/22.png" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span>26 May, 2013.</span>
                                        <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                    </p>
                                    <span class="rating"><span style="width:100%;"></span></span>
                                </li>
                            </ul>
                        </div>
                    	
                    </div>
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
                    	<h5 class="line"><span>Vimeo Video.</span></h5>
                        <iframe src="http://player.vimeo.com/video/65110834?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="300px" height="170px" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                    
                    <div class="sidebar">
                    	<h5 class="line"><span>Ads Spot.</span></h5>
                        <ul class="ads125">
                        	<li><a href="#"><img src="img/banner/3.png" alt="MyPassion" /></a></li>
                            <li><a href="#"><img src="img/banner/1.png" alt="MyPassion" /></a></li>
                            <li><a href="#"><img src="img/banner/2.png" alt="MyPassion" /></a></li>
                            <li><a href="#"><img src="img/banner/4.png" alt="MyPassion" /></a></li>
                        </ul>
                    </div>
                    
                    <div class="sidebar">
                    	<div id="tabs">
                            <ul>
                                <li><a href="#tabs1">Recent.</a></li>
                                <li><a href="#tabs2">Popular.</a></li>
                                <li><a href="#tabs3">Comments.</a></li>
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
                            <div id="tabs2">
                                <ul>
                                	<li>
                                    	<a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                    	<a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                    	<a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                    <li>
                                    	<a href="#" class="title">Mauris eleifend est et turpis. Duis id erat.</a>
                                        <span class="meta">27 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                        <span class="rating"><span style="width:70%;"></span></span>
                                    </li>
                                </ul>
                            </div>
                            <div id="tabs3">
                                <ul>
                                	<li>
                                    	<a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                    	<a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                    	<a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                    	<a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                    <li>
                                    	<a href="#" class="title"><strong>Someone:</strong> eleifend est et turpis. Duis id erat.Mauris eleifend est et turpis. Duis id erat.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebar">
                    	<h5 class="line"><span>Accordion.</span></h5>
                        <div id="accordion">
                        
                            <h3>Poserue Clubre.</h3>
                            <div>
                                <p>Vestibulum tempor feugiat est in posuere. Sed auctor libero augue, a faucibus turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices. posuere.</p>
                            </div>
                            
                            <h3>Lubelia Mest.</h3>
                            <div>
                                <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.</p>
                            </div>
                        
                            <h3>Tincidunt Massa.</h3>
                            <div>
                                <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac liberoac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>
                            </div>
                            
                            <h3>Quisque lobortis.</h3>
                            <div>
                                <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netuset malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="sidebar">
                    	<h5 class="line"><span>Ads Spot.</span></h5>
                        <a href="#"><img src="img/tf_300x250_v1.gif" alt="MyPassion" /></a>     
                    </div>
                	
                    <div class="sidebar">
                    	<h5 class="line"><span>Facebook.</span></h5>
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
            	<div class="column-one-fourth">
                    <h5 class="line"><span>Tweets.</span></h5>
                    <div id="tweets"></div>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>Navigation.</span></h5>
                    <ul class="footnav">
                    	<li><a href="#"><i class="icon-right-open"></i> World.</a></li>
                        <li><a href="#"><i class="icon-right-open"></i> Business.</a></li>
                        <li><a href="#"><i class="icon-right-open"></i> Politics.</a></li>
                        <li><a href="#"><i class="icon-right-open"></i> Sports.</a></li>
                        <li><a href="#"><i class="icon-right-open"></i> Health.</a></li>
                        <li><a href="#"><i class="icon-right-open"></i> Sciences.</a></li>
                        <li><a href="#"><i class="icon-right-open"></i> Spotlight.</a></li>
                    </ul>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>Flickr Stream.</span></h5>
                    <div class="flickrfeed">
                        <ul id="basicuse" class="thumbs"><li class="hide"></li></ul>
                    </div>
                </div>
                <div class="column-one-fourth">
                    <h5 class="line"><span>About.</span></h5>
                    <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhon cus sem purus eu sapien. Lorem ipsum dolor sit amet adipcising elit. Elit norem simuls tortor lorem adipcising purus mosteu dsapien egestas.</p>
                </div>
                <p class="copyright">Copyright 2013. All Rights Reserved</p>
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
