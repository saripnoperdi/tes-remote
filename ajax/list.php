<?php include"proses/config.php"; ?>

<h1>List Data Siswa</h1>
<table width="469" height="52" border="1">
  <tr>
    <td width="67">Nim mama saya<td>
    <td width="91">Nama</td>
    <td width="190">Alamat</td>
    <td width="130">Aksi</td>
  </tr>
 <?php 
 $q=mysql_query("select * from mahasiswa");
 while($row=mysql_fetch_array($q)){
 ?>
  <tr id="tr<?php echo $row['nim']; ?>">
    <td><?php echo $row['nim']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
    <td><input type="button" name="button" 
    id="<?php echo $row['nim']; ?>" class="delete" value="Delete" />
	<input type="button" name="edit" 
    id="<?php echo $row['nim']; ?>" class="edit" value="edit" />
	</td>
  </tr>
  <?php } ?>
</table>
<p>&nbsp;</p>
<div id="pesan"></div>
<script>
	$(document).ready(function() {
        $(".delete").click(function(){
			var id=this.id;
			var trId = "tr"+id;
			//alert(trId);	
			$.post("proses/delete.php",{idDelete:id},function(data){
				$("#"+trId).hide();	
				$("#pesan").html(data);
			});
			
		});
		
		$(".edit").click(function(){
			var ids = this.id;
			$.post("proses/editget.php",{idedit:ids},function(result){
				var objEdit = jQuery.parseJSON(result);
				var cmbKelas="<option value='"+objEdit.kelas+"'>"+objEdit.kelas+"</option>";
				$("#nim").val(objEdit.nim);
				$("#nama").val(objEdit.nama);
				$("#alamat").val(objEdit.alamat);
				$("#telpon").val(objEdit.telpon);
				$("#kelas").html(cmbKelas);
				$("#sav").val("edit");
				
			});
			
		});
    });
</script>
