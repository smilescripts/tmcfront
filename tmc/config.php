<?php
include_once("inc/facebook.php"); //include facebook SDK
 
######### edit details ##########
$appId = '673899142736114'; //Facebook App ID
$appSecret = 'e2c41f408277a6cc3d3ba045071c121e'; // Facebook App Secret
$return_url = 'http://localhost/publish_to_wall/process.php';  //return url (url to script)
$homeurl = 'http://localhost/publish_to_wall/';  //return to home
$fbPermissions = 'publish_actions ,manage_pages';  //Required facebook permissions
##################################

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));

$fbuser = $facebook->getUser();
?>