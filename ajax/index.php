<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/jquery-ui.css"  />

<script src="js/jquery.js"  type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="377" border="0">
    <tr>
      <td>Nim</td>
      <td><input type="text" name="nim" id="nim" class="form" /></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input type="text" name="nama" id="nama" class="form" /></td>
    </tr>
    <tr>
      <td valign="top">Alamaat</td>
      <td><textarea name="alamat" id="alamat" cols="45" rows="5" class="form"></textarea></td>
    </tr>
    <tr>
      <td>Telpon</td>
      <td><input type="text" name="telpon" id="telpon" class="form" /></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td><select name="kelas" id="kelas" class="form">
        <option value="0">--Pilihan Kelas--</option>
        <option value="Informatika">Informatika</option>
        <option value="Sekretaris">Sekretaris</option>
        <option value="Akuntansi">Akuntansi</option>
		
      </select></td>
    </tr>
	<input type="hidden" id="sav" name="gol" class="form" />
    <tr>
      <td>&nbsp;</td>
      <td style="width:200px"><input type="button" name="button" id="simpan" value="Simpan"  />
      <a href="list.php"><input type="button" name="button2" id="button" value="Lihat Data" /></a></td>
    </tr>
  </table>
</form>

<div id="pesan"></div>

<?php include"list.php"; ?>
<script>
	$(document).ready(function() {
        $("#simpan").click(function(){
			$.post("proses/simpan.php",$("#form1").serialize(),function(data){
				$("#pesan").html(data);
				$(".form").val("");
				
			});	
		});
    });
</script>
</body>
</html>