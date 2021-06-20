<h1>Halaman Admin</h1>
<a href="" >Kirim</a>
<a href="">Assign Driver</a>
<a href="">Help</a>
<p>Hi , <?php echo $username ?></p>
<a href="logout">Logout</a>
<table>
	<tr>
		<th>User ID</th>
		<th>Name</th>
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
			echo "<form class = '' method='GET' action='addDelivery'>".
				"<input type='hidden' name='idCustomer' value='$idSelect'/>" .
				"<input type='submit' value='KIRIM' name='kirim' width='60px'></form>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>