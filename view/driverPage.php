<?php 
	$tipe = "Driver";
?>

<div class="topnav">
<a href="" class="active" >Kirim</a>

</div>

<table id="table_view">
	<tr>
		<th>No</th>
		<th>Customer</th>
		<th>Schedule Date</th>
		<th>Address</th>
		<th>Aksi</th>
	</tr>
	<?php
		$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getCustomerName()."</td>";
			echo "<td>".date('d-m-Y', strtotime($row->getSchedulededData()))."</td>";
			echo "<td>".$row->getAddress()."</td>";
			if($row->getStatus()=='Belum Dikirim'){
				echo "<td>";
				$idSelect = $row->getId();
					echo "<form class = 'fl' method='POST' action='driverPage/kirim'>".
					"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button style= 'width:243.6px' class ='btnlist' type='submit' value='KirimDriver' name='konfirmasi'>Kirim Paket</></form>";
			echo "</td>";
			}
			else{
			echo "<td>";
				$idSelect = $row->getId();
					echo "<form class = 'fl' method='POST' action='driverPage/konfirmasi'>".
					"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='Konfirmasi' name='konfirmasi'>Konfirmasi Paket Sampai</></form>";
		
			echo "</td>";
			}
			echo "</tr>";
			$i++;
		}
    ?>
</table>