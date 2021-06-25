<?php 
	$tipe = "Manager";
?>

<div class="topnav">
<a href="managerPage" class="" >Laporan 1</a>
<a href="managerReport2" class="active" >Laporan 2</a>
<a href="managerReport3" class="" >Laporan 3</a>
</div>
<a href ="pdf2">CETAK HALAMAN</a>
<h3 style ='text-align:center;'>Daftar Pengiriman yang berhasil di antar bulan ini</h3>

<table id="table_view">
	<tr>
		<th>No</th>
		<th>Driver</th>
		<th>Nama Customer</th>
		<th>Alamat</th>
		<th>Nama Barang</th>
	</tr>
	<?php
		$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getDriverName()."</td>";
			echo "<td>".$row->getCustomerName()."</td>";
			echo "<td>".$row->getAddress()."</td>";
			echo "<td>".$row->getItemName()."</td>";
			$i++;
		}
    ?>
</table>
