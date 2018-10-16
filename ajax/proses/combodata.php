<?php
include "config.php";
$q= mysql_query("select * from mahasiswa where kelas='".$_POST['id']."'");
echo "<option value='0'>--Pilih Nama--</option>";
while($r=mysql_fetch_Array($q)){
echo "<option value='".$r['nim']."'>".$r['nama']."<option>";

}
?>