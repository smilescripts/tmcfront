<?php
/* @var $this BeritaController */
/* @var $model Berita */

$this->breadcrumbs=array(
	'Beritas'=>array('index'),
	$model->kode_berita,
);


?>


    <div class="column-two-third single">
                    	
                      <img src="tmc/foto/berita/<?php echo $model->kode_berita ?>/<?php echo $model->foto ?>" style="width:100%;height:450px" alt="MyPassion" class="alignleft" />
                        <h3 class="title" style="color:black"><?php echo $model->judul_berita;?></h3><hr/>
                        <span class="meta"><?php echo $model->tanggal_posting;?></span>
                        <p><?php echo $model->isi_berita;?></p>
                        
                        
                     
                        
                        <div class="relatednews">
                            <h5 class="line"><span>Berita Terbaru.</span></h5>
                            <ul>
							  <?php 
							  manual_connect();
								$viewberitap=mysql_query("select * from berita where status='aktif' and kode_berita!='$_GET[id]' order by tanggal_posting desc limit 4 ");
								while($getberitap=mysql_fetch_object($viewberitap)){
							?>
                                <li>
                                   <img src="tmc/foto/berita/<?php echo $getberitap->kode_berita ?>/<?php echo $getberitap->foto ?>" style="width:140px;height:86px" alt="MyPassion" />
                                    <p>
                                        <span><?php echo $getberitap->tanggal_posting ?></span>
                                      <a href="index.php?r=berita/view&id=<?php echo $getberitap->kode_berita ?>"><?php echo $getberitap->judul_berita ?></a>
                                    </p>
                                   
                                </li>
								<?php } ?>
                             </ul>
                        </div>
                        
                        
                   </div>
                 