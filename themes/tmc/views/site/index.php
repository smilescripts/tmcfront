
<?php
	manual_connect();
	$baseUrl = Yii::app()->theme->baseUrl;
	$root = Yii::app()->baseUrl;
?>



                    <!-- Popular News -->
                	<div class="column-one-third">
                    	<h5 class="line" style="color:black"><span>Informasi Berita Terbaru.</span></h5>
                        <div class="outertight">
                        	<ul class="block">
							<?php 
								$viewberita=mysql_query("select * from berita where status='aktif' order by akses desc limit 10");
								while($getberita=mysql_fetch_object($viewberita)){
							?>
                                <li>
                                  <a href="#"><img src="<?php echo $root;?>/foto/berita/<?php echo $getberita->kode_berita ?>/<?php echo $getberita->foto ?>" style="width:140px;height:86px" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span><?php echo $getberita->tanggal_posting ?></span>
                                        <a href="#"><?php echo $getberita->judul_berita ?></a>
                                    </p>
                                   
                                </li>
								
								
						  <?php } ?>
                          </ul>
                        </div>
                        
                    </div>
                    <!-- /Popular News -->
                    
                    <!-- Hot News -->
                    <div class="column-one-third" style="height:985px">
                    	<h5 class="line" style="color:black"><span>Informasi Terpopuler.</span></h5>
                        <div class="outertight m-r-no">
                        	<ul class="block">
                              <?php 
								$viewberitap=mysql_query("select * from berita where status='aktif' order by tanggal_posting desc limit 10");
								while($getberitap=mysql_fetch_object($viewberitap)){
							?>
                                <li>
                                    <a href="#"><img src="<?php echo $root;?>/foto/berita/<?php echo $getberitap->kode_berita ?>/<?php echo $getberitap->foto ?>" style="width:140px;height:86px" alt="MyPassion" class="alignleft" /></a>
                                    <p>
                                        <span><?php echo $getberitap->tanggal_posting ?></span>
                                        <a href="#"><?php echo $getberitap->judul_berita ?></a>
                                    </p>
                                   
                                </li>
								
								
						  <?php } ?>
                              </ul>
                        </div>
                        
                    </div>
                   <div class="column-two-third">
                    	<h5 class="line" style="color:black">
                        	<span>Peta Bandung.</span>
                            <div class="navbar">
                                <a id="next2" class="next" href="#"><span></span></a>	
                                <a id="prev2" class="prev" href="#"><span></span></a>
                            </div>
                        </h5>
                        
                        <div class="outerwide" >
                        	<ul class="wnews" id="carousel2">
                            	<li>
                             <iframe
    width="600"
    height="600"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCJg5Vf56KX370PNral6Z3SC4x7MhkwBhU
      &q=polrestabes+Bandung, Jawa Barat, Indonesia
	  &zoom=13
      &attribution_source=Google+Maps+Embed+API
    ">
  </iframe>
                            </ul>
                        </div>
                        
                     </div>
                    <!-- /World News -->
                    
                    <!-- Popular News -->
                
                    <!-- /Popular News -->
                    
                