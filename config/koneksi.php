<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "dbhitech";
// mysqli_connect($host, $user, $pass);
// mysqli_select_db($dbName);

$connection = mysqli_connect($host, $user, $pass, $dbName);

?>