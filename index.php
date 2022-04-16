<?php
$mysqli = new mysqli("nksmysqldemo.mysql.database.azure.com","mysqroot","Ind@9999","ecomdb");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
