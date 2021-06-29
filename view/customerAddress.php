<?php 
	$tipe = "Admin";
	$username = "Admin";
?>

<div class="topnav">
<a href="listUser" class="active" >Kirim</a>
<a href="listDriver">Driver</a>
<a href="addNewDriver">Tambah Driver Baru</a>
<a href="addNewUser">Tambah User Baru</a>

</div>

<fieldset>
	<legend>Tambah Alamat</legend>
	<br>
	<form method="POST" action="customerAddress">
		<label>Alamat Pengiriman :
		<br>
		<input type="text" name="alamat" required> </label>
		<br><br>
		<label>Deskripsi:
		<br>
		<input type="text" name="deskripsi" required></label>
		<br>
		<input type="hidden" name='id' value='<?php  echo $_GET['id'] ?>'/>
		<button class = "btnlist" type="submit" value="ADD" name='addAlamat'>Tambah</button>
		<button class="btnlist" type="submit"><a href="listUser">Back</a></button>
	</form>	
</fieldset>
<hr>
<table id="table_view">
	<tr>
		<th>No</th>
		<th>Alamat Pengiriman</th>
		<th>Deskripsi</th>
	</tr>
	<?php
	
		$i=1;
	foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getAddress()."</td>";
			echo "<td>".$row->getDescription()."</td>";
			$i+=1;
	}
	?>
</table>

