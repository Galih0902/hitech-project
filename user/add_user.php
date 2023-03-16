<?php
session_start();
include"../config/koneksi.php";

function autoNumber($id, $table){
  $query = 'SELECT MAX(RIGHT(id_user, 5)) as max_id FROM tb_user ORDER BY id_user ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1, 5);
  $sort_num++;
  $new_code = sprintf("1%02s", $sort_num);
  return $new_code;
 }
?>


<!DOCTYPE html>
<head>
    <title>User Hi-Tech</title>
</head>
    <body>
        <center>
            <?php
            include "menupimpinan.php";
            ?>
    </body>

<head>
<form name="adduser" method="post" action="user_save.php" enctype="multipart/form-data">
            <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
            <link rel="stylesheet" href="../css/style.css">
<title>Data User</title>
</head>

<body>
<div id="form">
<h1 align="center">Form Data User</h1>
  <table>
    <tr>
      <td >ID User</td>
      <td colspan="2" ><label>
        <input name="iduser" type="text" id="iduser" value="<?php echo autoNumber('id_user','tb_user');?>" placeholder="Isikan ID user" readonly />
          
      </label></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><label>
        <input name="username" type="text" id="username" size="40" maxlength="35" placeholder="Isikan Username" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input name="password" type="text" id="password" size="40" maxlength="35" placeholder="Isikan Password"/>
      </label></td>
    </tr>
    <tr>
      <td>NamaAkun</td>
      <td><label>
        <input name="nama" type="text" id="nama" size="40" maxlength="35" placeholder="Isikan Nama Akun"/>
      </label></td>
    </tr>
    <tr>
      <td >Level</td>
      <td ><label >
        <select  name="level" id="level">
          <option value="Admin" selected="selected">Admin</option>
          <option value="Mekanik">Mekanik</option>
          <option value="Pimpinan">Pimpinan</option>
        </select>
      </label></td>
    </tr>
      
<tr>
      <td colspan="2"><label>
        
        <div align="center">
          <input type="submit" name="save" id="save" value="Save" />
          <input type="reset" name="reset" id="reset" value="Reset" />
        </div>
      </label>
        <label>
        <div align="center"></div>
      </label></td>
    </tr>
        
  </table>
</form>
    </div>
</body>