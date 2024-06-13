<?php
// credential
$host     = "localhost";
$user     = "root";
$database = "uts_312310748";
$password = "";

// create connection
$koneksi   = mysqli_connect($host, $user, $password, $database);

// test connection
if (mysqli_connect_errno()) {
   // this for show failed
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
}
?>
