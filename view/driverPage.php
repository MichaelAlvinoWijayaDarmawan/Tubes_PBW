<?php 
	$tipe = "Driver";
?>

<div class="topnav">
<a href="" class="active" >Kirim</a>
<a href="">Help</a>
</div>

<table id="table_view">
	<tr>
		<th>No</th>
		<th>Customer</th>
		<th>Driver</th>
		<th>Aksi</th>
	</tr>
	<?php
		$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getCustomerName()."</td>";
			echo "<td>".$row->getDriverName()."</td>";
			echo "<td>";
				$idSelect = $row->getId();
					echo "<form class = 'fl' method='POST' action='driverPage/konfirmasi'>".
					"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='Konfirmasi' name='konfirmasi'>Konfirmasi Paket Sampai</></form>";
		
			echo "</td>";
			echo "</tr>";
			$i++;
		}
    ?>
</table>