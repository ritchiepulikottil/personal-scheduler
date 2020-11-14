

<?php
$server = "sql312.epizy.com";
$username = "epiz_27141858";
$password = "OGQQopP5T2fBz4";
$dbname = "epiz_27141858_register";
$con = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>