<?php 
	$tipe = "Admin";
	$username = "Admin";
?>

<div class="topnav">
<a href="listUser" >Kirim</a>
<a href="listDriver">Driver</a>
<a href="addNewDriver">Tambah Driver Baru</a>
<a href="addNewUser" class="active">Tambah User Baru</a>
<a href="">Help</a>
</div>


<fieldset>
	<legend>Tambah User Baru</legend>
	<br>
	<form method="POST" action="addNewUser">
		<label>Nama User  :
		<br>
		<input type="text" name="name" required> </label>
		<br><br>
		<label>Password  :
		<br>
		<input type="password" name="password" required> </label>
		<br><br>
		<label>Alamat Pengiriman :
		<br>
		<input type="text" name="alamat" required> </label>
		<br><br>
		<label>Deskripsi :
		<br>
		<input type="text" name="deskripsi" required></label>
		</br>
		<button class="btnlist" type="submit" value="ADD" name='addDataUser'>Tambah</button>
		<a href="listUser">Back</a>
	</form>
</fieldset>
