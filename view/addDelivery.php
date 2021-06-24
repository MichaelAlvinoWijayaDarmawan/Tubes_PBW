<?php 
	$tipe = "Admin";
	$username = "Admin";
?>

<div class="topnav">
<a href="listUser" class="active" >Kirim</a>
<a href="">Tambah Driver Baru</a>
<a href="addNewUser">Tambah User Baru</a>
<a href="">Help</a>
</div>
<br>
<?php $idC=$_GET['idCustomer'];?>
<div id = "container-form">
	<form  id="addDelivery" method="POST" action="addDelivery">
		<input type="hidden" name="idCustomer" value="<?php echo $idC; ?>" />
		<label>Nama Customer :
			<br>
			<input type="text" name="name" value="<?php echo $result[0]->getName();?>" disabled> 
		</label>
		<br>
		<label>Alamat :
			<br><br>
		<select id = "select" name="address">
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
			<br><br>
		<select id = "select" name="drivers">
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
		<label for="status">Kirim Sekarang</label>
		<br>
		<input id = "radiobtn" type="radio" name="status" value="Sekarang" onclick = 'setDisable()' checked/>
		<input class = "inputradiobtn" type="text" value="<?php echo date("d-m-Y")?>" placeholder="<?php echo date("d-m-Y")?>" disabled>
		<br>
		<label for="status">Kirim Nanti</label>
		<br>
		<input id = "radiobtn" type="radio" name="status" value="Nanti" onclick = 'setEnable()'/>
		<input class = "inputradiobtn" type="date" name="tanggalKirim" id="tanggalKirim" disabled/>

	

		<br>
		<table>
		<label>Nama Barang :
			<br>
			<input type="text" name="namaBarang" value=""> 
		</label>
		<br>
		<label>Jenis Barang :
			<br>
			<input type="text" name="jenisBarang" value=""> 
		</label>
		<br>
		<label>Banyak Barang :
			<br>
			<input type="number" name="banyakBarang" value="" min="1" max="10"> 
		</label>
		</table>
		<label>Satuan Barang :
			<br>
			<input type="text" name="satuanBarang" value=""> 
		</label>
		<br>
		<button class="btnlist" type="submit" value="SUBMIT">Submit</button>
		<button class="btnlist" type="submit"><a href="listUser">Back</a></button>
		<br>
	</form>

</div>

<script>
	let tgl = document.getElementById("tanggalKirim");
	function setDisable(){
		tgl.disabled = true;
	}
	function setEnable(){
		tgl.disabled = false;
	}
</script>