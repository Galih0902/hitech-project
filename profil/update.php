<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<?php
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM profil WHERE id = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
echo "" .mysql_error();
?>
<head>
<title>Edit Profil-Contact</title>
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
<table >
<h4 align="center"> Form Update</h4>
    <tr>
        <h2>Id : <input type="text" name="id" size="40" disabled value="<?php echo $data['id']; ?>"></h2>
    </tr>
<th>
<td><h2>Profil :<br>
    <textarea name="profil" rows="15" cols="10"><?php echo $data[profil];?></textarea></h2>
</th>
<th>
<td><h2>Contact :<br>
<textarea name="contact" rows="15" cols="10"><?php echo $data[contact];?></textarea>
</th>

    <tr>
<td></td><td><input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<input type="SUBMIT" name="simpan" value="Save"></td>
  </tr>
</table>
</form>