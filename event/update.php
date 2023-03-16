<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<?php
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM event WHERE id = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
echo "" .mysql_error();
?>
<head>
<title>Edit Event</title>
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
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<form method="post" action="prosesupdate.php">
<table width="400" border="0" cellpadding="2" cellspacing="2">
     <h4 align="center"> Form Update</h4>

    <h2>Id :  <input type="text" name="id" disabled value="<?php echo $data['id']; ?>"> </td>
  <br><br>
<h2>Judul : <input type="text" name="judul" value="<?php echo $data['judul']; ?>"> </td>
  <br><br>
<h2>Isi :<br><textarea name="isi" rows="15" cols="80"><?php echo $data[isi];?></textarea></td>
<br><br>

    <tr>
<td></td><td></td><td><input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<input type="SUBMIT" name="simpan" value="Save"></td>
  </tr>
</table>
</form>