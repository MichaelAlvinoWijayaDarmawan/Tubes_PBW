<?php 
	$tipe = "Customer";
?>
<div class="topnav">
<a href="" class="active" >Cek Status</a>
<a href="">Help</a>
</div>

<table id="table_view">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Barang</th>
		<th>Status</th>
		<th>Driver</th>
	</tr>
	<?php
	
	$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getCustomerName()."</td>";
			echo "<td>".$row->getAddress()."</td>";
			echo "<td>".$row->getItem()."</td>";
			echo "<td>".$row->getStatus()."</td>";
			echo "<td>".$row->getDriverName()."</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
