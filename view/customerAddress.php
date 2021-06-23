<?php 
	$tipe = "Admin";
	$username = "Admin";
?>

<div class="topnav">
<a href="" class="active" >Kirim</a>
<a href="">Assign Driver</a>
<a href="addNewUser">Add new user</a>
<a href="">Help</a>
</div>

<fieldset>
		<legend>Tambah Alamat</legend>
		<br>
		<form method="POST" action="customerAddress">
		<label>Alamat Pengiriman :
		<br>
		<input type="text" name="alamat"> </label>
		<br><br>
		<label>Deskripsi:
		<br>
		<input type="text" name="deskripsi"></label>
		<br>
		<input type="hidden" name='id' value='<?php  echo $_GET['id'] ?>'/>
		<button class = "btnlist" type="submit" value="ADD" name='addAlamat'>Tambah</button>
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

