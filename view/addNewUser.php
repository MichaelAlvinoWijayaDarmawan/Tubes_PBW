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
		<legend>Tambah Users Baru</legend>
		<form method="POST" action="addNewUser">
		<label>Nama User  :
		<input type="text" name="name"> </label>
		</br> </br>
		<label>Password  :
		<input type="password" name="password"> </label>
		</br> </br>
		<label>Alamat Pengiriman :
		<input type="text" name="alamat"> </label>
		</br> </br>
		<label>Deskripsi:
		<input type="text" name="deskripsi"></label>
		</br>
		 
		<input type="submit" value="ADD" name='addDataUser'>

</fieldset>
