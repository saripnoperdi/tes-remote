<?php 
include"config.php";

if ($_POST['gol']=="edit"){
$e=mysql_query("update mahasiswa set nama = '".$_POST['nama']."',
									 alamat = '".$_POST['alamat']."',
									 telpon = '".$_POST['telpon']."',
									 kelas = '".$_POST['kelas']."'
									  where nim= '".$_POST['nim']."'")	;
if($e){
	echo"Simpan Data berhasil";
}else{
	echo "gagal simpan data";
}
}else{
$q=mysql_query("INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `telpon`, `kelas`) 
			VALUES ('".$_POST['nim']."', '".$_POST['nama']."',
					 '".$_POST['alamat']."', '".$_POST['telpon']."', 
					 '".$_POST['kelas']."')");
					 if($q){
	echo"Simpan Data berhasil";
}else{
	echo "gagal simpan data";

}
}
?>