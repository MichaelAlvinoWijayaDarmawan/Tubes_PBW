<h1>Halaman Admin</h1>
<div class="topnav">
<a href="" class="active" >Kirim</a>
<a href="">Assign Driver</a>
<a href="addNewUser">Add new user</a>
<a href="">Help</a>
</div>
<div style="padding:16px">
<table id="customers">
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
<fieldset>
		<legend>Tambah Alamat</legend>
		<form method="POST" action="customerAddress">
		<label>Alamat Pengiriman :
		<input type="text" name="alamat"> </label>
		</br> </br>
		<label>Deskripsi:
		<input type="text" name="deskripsi"></label>
		</br>
		<input type="hidden" name='id' value='<?php  echo $_GET['id'] ?>'/>
		 
		<input type="submit" value="ADD" name='addAlamat'>
</fieldset>
</form>	