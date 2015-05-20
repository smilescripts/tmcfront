<?php

auto_connect();
/* @var $this PengaduanController */
/* @var $model Pengaduan */

$this->breadcrumbs=array(
	'Pengaduans'=>array('index'),
	$model->kode_pengaduan,
);

$this->menu=array(
array('label'=>'Kelola Pengaduan', 'url'=>array('admin')),
);
?>

<h1>View Pengaduan #<?php echo $model->kode_pengaduan; ?></h1>
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
      &q=<?php echo $model->lokasi; ?>+Bandung, Jawa Barat, Indonesia
	  &zoom=16
      &attribution_source=Google+Maps+Embed+API
    ">
  </iframe>
                            </ul>
                        </div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_pengaduan',
		'nama_pengadu',
		'email',
		'no_telp',
		'isi_pengaduan',
		'tanggal_pengaduan',
		//'lokasi',
		'jenisPengaduan.nama_jenis',
	),
));
if($model->verifikasi!="Diterima"){ 
?>
<br/>
<center>
<form action="" method="POST">
<select name="verifikasi">
<option value="Menunggu" <?php if($model->verifikasi=="Menunggu"){echo "selected";} ?>>Menunggu</option>
<option value="Diterima" <?php if($model->verifikasi=="Diterima"){echo "selected";} ?>>Diterima</option>
<option value="Ditolak" <?php if($model->verifikasi=="Ditolak"){echo "selected";} ?>>Ditolak</option>
</select><br/>
<input type="submit" class="btn btn-info" value="Ubah" name="ubah"/> 
</form>
</center>
<?php 
}
if(isset($_POST["ubah"])){
	$sql = "UPDATE `pengaduan` SET `verifikasi`= '{$_POST['verifikasi']}' WHERE `kode_pengaduan` = '$model->kode_pengaduan'"; 
						mysql_query($sql) or die(mysql_error()); 
	/*					
	if($_POST['verifikasi']=="Diterima"){
	
	// twitter
				
						require_once('codebird/src/codebird.php');
 
						\Codebird\Codebird::setConsumerKey("zHeBf5vVYSSLq07cXYUXJv0iB", "QZ7md9kjmjyJDIzplYSbqWPIMm8F3umI8HW8QIVS7Ove2iZOvy");
						$cb = \Codebird\Codebird::getInstance();
						$cb->setToken("296609812-gD029s4U6UoZqnEd4OSrLBNO3HFGk5yAbUKILSbT", "2y1kw6cedbLKiXmfCJhSK9jiwR6QAhgpTYKaRBjYJHV2l");
						 
						
						$link=substr($model->isi_pengaduan,0,140);
						
						$isi=$model->isi_pengaduan;
						$params = array(
						  
						  'status' => "$link",
						
						);
						$reply = $cb->statuses_update($params);
						// end of twitter
						
						//facebook
						include_once("config.php");

							$userPageId 	= "";
							$userMessage 	= strip_tags($model->isi_pengaduan,'');
							
							if(strlen($userMessage)<1) 
							{

								$userMessage = 'No message was entered!';
							}
							
							
								$post_url = '/'.$userPageId.'/feed';

							
								$msg_body = array(
								'message' => $userMessage,
								'caption' => "TMC",
								
								);
							
							if ($fbuser) {
							  try {
									$postResult = $facebook->api($post_url, 'post', $msg_body );
								} catch (FacebookApiException $e) {
								echo $e->getMessage();
							  }
							}else{
							 $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
							 header('Location: ' . $loginUrl);
							}
						
						
						//end of facebook
	
	
	
	}					
		*/				
						
	echo "<script>window.location='?r=Pengaduan/admin'</script>";

}
?>
