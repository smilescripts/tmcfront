<?php
/* @var $this ProfilInstansiController */
/* @var $data ProfilInstansi */
manual_connect();
?>
<?php
$getvisimisi12=mysql_query("select * from profil_instansi");
$view12=mysql_fetch_object($getvisimisi12);
echo '<p>'.$view12->profil_lainnya.'</p>';
?>
<h6 class="title" style="color:black">VISI </h6>
<?php
$getvisimisi=mysql_query("select * from profil_instansi");
$view=mysql_fetch_object($getvisimisi);
echo '<p>'.$view->visi.'</p>';
?><br/>

<h6 class="title" style="color:black">MISI</h6>
<?php
$getvisimisi1=mysql_query("select * from profil_instansi");
$view1=mysql_fetch_object($getvisimisi1);
echo '<p>'.$view1->misi.'</p>';
?>


<ul class="sharebox">
<li><a href="#"><span class="twitter">Tweet</span></a></li>
<li><a href="#"><span class="pinterest">Pin it</span></a></li>
<li><a href="#"><span class="facebook">Like</span></a></li>
</ul>