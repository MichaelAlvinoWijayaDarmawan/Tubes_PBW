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
		<th>Status</th>
	</tr>
	<?php
		$i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getCustomerName()."</td>";
			echo "<td>".$row->getDriverName()."</td>";
			echo "<td>";
			echo "<form class = 'fl' method='GET' action='driverPage'>".
				"<button class ='btnlist' type='submit' value='KIRIM' name='kirim'>Kirim</></form>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
    ?>
</table>