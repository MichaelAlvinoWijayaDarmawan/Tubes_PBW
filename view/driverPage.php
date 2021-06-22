<h1>Halaman Driver</h1>
<p>Hi , <?php echo $username ?></p>
<a href="logout">Logout</a>
<table>
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
			echo "<form class = '' method='GET' action='driverPage'>".
				"<input type='submit' value='KIRIM' name='kirim'></form>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
    ?>
</table>