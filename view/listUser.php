<?php 
	$tipe = "Admin"; 
?>

<div class="topnav">
<a href="listUser" class="active" >Kirim</a>
<a href="addNewDriver">Tambah Driver Baru</a>
<a href="addNewUser">Tambah User Baru</a>
<a href="">Help</a>
</div>
<form class = ''  method='GET' action='filter'>
	<fieldset class="search">
		<legend>Search by Name</legend>
		<input class="inputSearch" type="text" name="filter" value="" required>
		<button class="btnSearch" type="submit" value="SEARCH">Cari</button>
	</fieldset>
</form>
<table id="table_view">
	<tr>
		<th>User ID</th>
		<th>Name</th>
		<th>Pengiriman</th>
		<th>Aksi</th>
	</tr>
	<?php
	
	$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getName()."</td>";
			echo "<td>";
			$idSelect = $row->getCustomerId();
			echo "<form class = 'fl'  method='GET' action='addDelivery'>".
				"<input type='hidden' name='idCustomer' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='Kirim' name='kirim' width='60px'>Kirim</button></form>";
			
			echo "</td>";
			echo "<td>";
			echo "<form  class = 'fl'  method='GET' action='customerAddress'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='AddAddress' name='AddAddress' width='60px'>Tambah Alamat</button></form>";
			echo "<form  class = 'fl'  method='GET' action='deleteCustomer'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='deleteCustomer' name='deleteCustomer' width='60px'><i class='fa fa-trash'></i></button></form>";
			echo "<form  class = 'fl'  method='GET' action='editCustomer'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='editCustomer' name='editCustomer' width='60px'><i class='fa fa-edit'></i></button></form>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
<br>
<hr>
<?php 
for ($i=1; $i<=$pageCount ; $i++){ ?>
	<form  class = 'fl'  method='POST' action='pagination'><button class="btnlist" name = "page" value = <?php echo ($i-1)*10; ?>><?php echo $i; ?></button></form>
<?php 
} 
?>
<br><br><br>
<hr>