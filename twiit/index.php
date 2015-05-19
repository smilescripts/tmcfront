<?php 

require_once('codebird/src/codebird.php');
 
\Codebird\Codebird::setConsumerKey("zHeBf5vVYSSLq07cXYUXJv0iB", "QZ7md9kjmjyJDIzplYSbqWPIMm8F3umI8HW8QIVS7Ove2iZOvy");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("296609812-gD029s4U6UoZqnEd4OSrLBNO3HFGk5yAbUKILSbT", "2y1kw6cedbLKiXmfCJhSK9jiwR6QAhgpTYKaRBjYJHV2l");
 
 //$image='Koala.jpg';
 
$params = array(
  'status' => 'Auto Post on Twitter with PHP http://goo.gl/OZHaQD #php #twitter',
  'media[]' => 'Koala.jpg'
);
$reply = $cb->statuses_updateWithMedia($params);

?>

