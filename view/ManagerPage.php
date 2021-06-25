<?php 
	$tipe = "Manager";
?>

<div class="topnav">
<a href="managerPage" class="active" >Laporan 1</a>
<a href="managerReport2" class="" >Laporan 2</a>
<a href="managerReport3" class="" >Laporan 3</a>
</div>
<h3 style ='text-align:center;'>10 Driver dengan pengiriman terbanyak Bulan ini</h3>
<table id="table_view">
	<tr>
		<th>No</th>
		<th>Driver</th>
		<th>Jumlah Paket yang dikirim</th>
	</tr>
	<?php
		$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getDriverName()."</td>";
			echo "<td>".$row->getJumlahPengiriman()." Pengiriman</td>";
			$i++;
		}
    ?>
</table>