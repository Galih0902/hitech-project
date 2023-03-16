<?php
session_start();
if($_SESSION){
	if($_SESSION['level']=="Admin")
	{
		header("Location: menuadmin.php");
	}
	if($_SESSION['level']=="Mekanik")
	{
		header("Location: menumekanik.php");
	}
	if($_SESSION['level']=="Pimpinan")
	{
		header("Location: menupimpinan.php");
	}
}
include('login.php');//include login script
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Hi-Tech </title>
    <link rel="shotcut icon" href="../images/hitech.png">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<body >
<div id="main">
<div id="login">
    <h3><a href="../index.php"> APLIKASI LAYANAN INFORMASI</br>HI-TECH</a></h3><hr />
	<h2 >Login</h2>
	<form action="" method="post">
		<input name="username" placeholder="Username" type="text">
		<input name="password" placeholder="Password" type="password">
        <select name="level" required>
            <option value="">Pilih Level User</option>
            <option value="1">Admin</option>
            <option value="2">Mekanik</option>
            <option value="3">Pimpinan</option>
        </select>
		<input name="submit" type="submit" value="Login">
        <span><?php echo $error; ?></span>
        </form>
</div>	
</div>
</body>
</html>