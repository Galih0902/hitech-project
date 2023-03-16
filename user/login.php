<?php

$error=''; 

include "../config/koneksi.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level		= $_POST['level'];
					
	$query = mysqli_query($connection, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['level'] = $row['level'];
		
		if($row['level'] == "Admin" && $level=="1")
		{
			
			header("Location: menuadmin.php");
		}
		else if($row['level'] =="Mekanik" && $level=="2")
		{
			header("Location: menumekanik.php");
		}
		else if($row['level'] == "Pimpinan" && $level=="3")
		{
			
			header("Location: menupimpinan.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
	// jika data ditemukan buat session untuk user yang login
}

			
?>