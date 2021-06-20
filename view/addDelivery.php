<h1>Halaman Admin</h1>
<a href="" >Kirim</a>
<a href="">Assign Driver</a>
<a href="">Help</a>
<a href="logout">Logout</a>
<br>
<?php $idC=$_GET['idCustomer'];?>
<form id="addDelivery" method="POST" action="addDelivery">
<input type="hidden" name="idCustomer" value="<?php echo $idC; ?>" />
<label>Nama Customer :
	<input type="text" name="name" value="<?php echo $result[0]->getName();?>" disabled> 
</label>
<br>
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
<br>
<br>
<label>Driver :
<select name="drivers">
<?php foreach ($result2 as $key => $row) {
			echo "<option value=";
			echo $row->getIdDriver();
			echo ">";
			echo $row->getNameDriver();
			echo"</option>";
	} ?>
</select>
</label>
<br>
<br>
<fieldset>
<legend>Mode Pengiriman</legend>
	<input type="radio" name="status" value="Sekarang" onclick = 'setDisable()' checked/>
	<label for="status">Kirim Sekarang</label><br>
	<input type="text" value="<?php echo date("d-m-Y")?>" placeholder="<?php echo date("d-m-Y")?>" disabled>
	<br>
	<input type="radio" name="status" value="Nanti" onclick = 'setEnable()'/>
	<label for="status">Kirim Nanti</label><br>
	<input type="date" name="tanggalKirim" id="tanggalKirim" disabled/>
</fieldset>
<br>
<table>
<label>Nama Barang :
	<input type="text" name="namaBarang" value=""> 
</label>
<br>
<label>Jenis Barang :
	<input type="text" name="jenisBarang" value=""> 
</label>
<br>
<label>Banyak Barang :
	<input type="number" name="banyakBarang" value="" min="1" max="10"> 
</label>
</table>
<label>Satuan Barang :
	<input type="text" name="satuanBarang" value=""> 
</label>
<input type="submit" value="SUBMIT">
<br>

</form>
<a href="listUser">BACK</a>

<script>
	let tgl = document.getElementById("tanggalKirim");
	function setDisable(){
		tgl.disabled = true;
	}
	function setEnable(){
		tgl.disabled = false;
	}
</script>