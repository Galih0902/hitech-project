<?php
include('cekpimpinan.php');
?>
<!DOCTYPE html>
    <html>
<head >
<meta charset="utf=8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
            <title>Hi-Tech</title>
            <link rel="shotcut icon" href="../images/hitech.png">
            <link rel="stylesheet" href="../css/menu.css">
        </head>
        
        <body>
            <div id="wrapper">
                
            <header>
                <img src="../images/hitech.png" width="400" >
            </header>              
                
<nav class="main_menu">
	<ul>
		<li><a href="../index.php">Website</a></li>
        <li><a href="../user/data_user.php">User</a></li>
        <li><a href="../mekanik/data_mekanik.php">Mekanik</a>
        <li><a href="#">Data</a>
			<ul>
            <li><a href="../halpimpinan/data_pelanggan.php">Pelanggan</a></li>
            <li><a href="../halpimpinan/data_info.php">Info Modifikasi</a></li>
            <li><a href="../halpimpinan/data_pilihan.php">Modif</a></li>
			</ul>
		</li>
		<li><a href="../halpimpinan/data_transaksi.php">Transaksi</a></li>
		<li><a href="#">Laporan</a>
		    <ul>
            <li ><a href="../laporan/lappelanggan.php" target="_blank">Pelanggan</a></li>
			<li><a href="../laporan/periode.php">Transaksi</a></li>
            </ul>
		</li>
        <li><a href="../user/logout.php">Logout</a></li>
	</ul>
</nav>
          <span >Halo <?php echo $_SESSION['level'];?>!</span>  
                             
            </body>
</html>