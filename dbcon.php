

<!--  start connecting to database -->
<?php

$dsn = 'mysql:host=localhost;dbname=sequencs_site';
$user = 'sequencs_site';
$pass = 'klv9m488ibd6';
$option = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $con = new PDO($dsn,$user,$pass,$option);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
  echo "FAILED TO CON" . $e->getMessage();

}
?>