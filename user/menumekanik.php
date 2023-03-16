<?php
include('cekmekanik.php');
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
        <li><a href="../halmekanik/data_transaksi.php">Data Transaksi</a></li>
		<li><a href="../halmekanik/data_info.php">Data Info Modifikasi</a></li>
        <li><a href="../user/logout.php">Logout</a></li>
	</ul>
</nav>
          <span >Halo <?php echo $_SESSION['level'];?>!</span>  
                             
            </body>
</html>