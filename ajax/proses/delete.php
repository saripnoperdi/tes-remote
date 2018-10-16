<?php 
include"config.php";
mysql_query("delete from mahasiswa where nim='".$_POST['idDelete']."'");
?>