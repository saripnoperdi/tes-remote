<?php
include "config.php";
$q=mysql_query("select * from mahasiswa where nim='".$_POST['idedit']."'");
$sr = mysql_fetch_Array($q);
$data['nim']=$sr['nim'];
$data['nama']=$sr['nama'];
$data['alamat']=$sr['alamat'];
$data['telpon']=$sr['telpon'];
$data['kelas']=$sr['kelas'];

echo json_encode($data);


?>