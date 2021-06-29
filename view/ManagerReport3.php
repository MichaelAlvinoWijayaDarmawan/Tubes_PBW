<?php 
	$tipe = "Manager";
?>

<div class="topnav">
<a href="managerPage" class="" >Laporan 1</a>
<a href="managerReport2" class="" >Laporan 2</a>
<a href="managerReport3" class="active" >Laporan 3</a>
</div>
<a href='pdf3' target='_blank'>CETAK PAGE</a>
<h3 style ='text-align:center;'>Daftar Kategori Barang yang dikirim</h3>

<table id="table_view">
	<tr>
		<th>No</th>
		<th>Kategori</th>
		<th>Jumlah Pengiriman</th>
	</tr>
	<?php
		$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getKategoriBarang()."</td>";
			echo "<td>".$row->getJumlahPengiriman()."</td>";
			$i++;
		}
    ?>
</table>
