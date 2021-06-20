<h1>Halaman Customer</h1>
<a href="" >Alamat</a>
<a href="">Cek Status</a>
<a href="">Help</a>
<p>Hi ,<?php  echo $result[0]->getName();?></p>
<table style="border:1px solid black;">
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