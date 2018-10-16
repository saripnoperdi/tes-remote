<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include "proses/config.php";?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/jquery-ui.css"  />

<script src="js/jquery.js"  type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>

<body>
Kelas :
<select name="kelas" id="kelas">
	<option value="0">---Pilihan Kelas---</option>
	<?php $d = mysql_query("select kelas from mahasiswa group by kelas");
	while($t = mysql_fetch_array($d)){ ?>
	 
	<option value="<?php echo $t[0];?>"><?php echo $t[0];?></option>
	
	<?php } ?>
</select>
Nama Mahasiswa :
<select name="kelas" id="nama">
	<option value="0">---Pilihan Mahasiswa---</option>
	
</select>

<script>
$(document).ready(function(){
	$("#kelas").change(function(){
		$.post("proses/combodata.php",{id:$("#kelas").val()},function(data){
			$("#nama").html(data);
		});
	});

});
</script>
</body>
</html>