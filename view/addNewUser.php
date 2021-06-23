<?php 
	$tipe = "Admin";
	$username = "Admin";
?>

<div class="topnav">
<a href="listUser" >Kirim</a>
<a href="">Assign Driver</a>
<a href="" class="active">Add New Users</a>
<a href="">Help</a>
</div>


<fieldset>
		<legend>Tambah User Baru</legend>
		<br>
		<form method="POST" action="addNewUser">
		<label>Nama User  :
		<br>
		<input type="text" name="name"> </label>
		<br><br>
		<label>Password  :
		<br>
		<input type="password" name="password"> </label>
		<br><br>
		<label>Alamat Pengiriman :
		<br>
		<input type="text" name="alamat"> </label>
		<br><br>
		<label>Deskripsi :
		<br>
		<input type="text" name="deskripsi"></label>
		</br>
		<button class="btnlist" type="submit" value="ADD" name='addDataUser'>Tambah</button>

</fieldset>
