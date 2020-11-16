

<?php
$server = "";
$username = "";
$password = "";
$dbname = "";
$con = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
