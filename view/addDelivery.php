<h1>Halaman Admin</h1>
<a href="" >Kirim</a>
<a href="">Assign Driver</a>
<a href="">Help</a>
<p>Hi ,</p>
<?php $idC=$_GET['idCustomer'];?>
<form method="POST" action="">
<input type="hidden" name="idCustomer" value="<?php echo $idC; ?>" />
<label>Nama Customer :
		<input type="text" name="name" value="<?php echo $result[0]->getName();?>" disabled> </label>
<label>Alamat :
<select name="address">
<?php foreach ($result as $key => $row) {
			echo "<option value=";
			echo $row->getAddressId();
			echo ">";
			echo $row->getAddress();
			echo"</option>";
	} ?>
</select>
</label>
</form>

<br> 
