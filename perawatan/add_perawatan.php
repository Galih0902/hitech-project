<?php
session_start();
include"../config/koneksi.php";
include "../user/menuadmin.php";

if(isset($_POST['simpan'])){
 $isi = addslashes($_POST['isi']);
    $id =($_POST['id']);
 $judul = $_POST['judul'];

 if (!empty ($id) && ($isi) && ($judul)){
 $simpan="insert into perawatan values('$id','$judul','$isi')";
 $query=mysql_query($simpan);
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_perawatan.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_perawatan.php'>";
}
}

function autoNumber ($id, $table){
  $query = 'SELECT MAX(RIGHT(id, 5)) as max_id FROM perawatan ORDER BY id ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1, 5);
  $sort_num++;
  $new_code = sprintf("1%02s", $sort_num);
  return $new_code;
 }
?>

<html>
<head>
<title>Input Perawatan</title>
<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	/*toolbar1: "insertfile undo redo | styleselect  ", 
	toolbar1: "bold italic | alignleft aligncenter alignright alignjustify",
	toolbar2: "bullist numlist outdent indent | link image",*/
    toolbar2: "print preview media | forecolor backcolor emoticons", 
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>
</head>
<body>
<div id="border">
			<form method="post" action="">
<h2>Id : <input type="text" name="id" size="40" maxlength="35" value="<?php echo autoNumber('id','perawatan');?>" readonly/>
<br><br>
<h2>Judul : <input type="text" name="judul" maxlength="150">
<br><br>
<h2>Isi :<br>
<textarea name="isi" rows="15" cols="80"></textarea>
<br><br>
<input type="submit" width="120" height="24" name="simpan" value="Submit" >
    <input type="reset" name="reset" id="reset" value="Reset" />
</form>
</div>
</body>
</html>