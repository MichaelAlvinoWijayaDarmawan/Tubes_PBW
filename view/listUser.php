<h1>Halaman Admin</h1>
<div class="atas">
<p>Hi , <?php echo $username ?></p>
<a href="logout">Logout</a>
</div>
<div class="topnav">
<a href="" class="active" >Kirim</a>
<a href="">Assign Driver</a>
<a href="addNewUser">Add new user</a>
<a href="">Help</a>
</div>

<div style="padding:16px">
<table id="customers">
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
			echo "<form class = 'fl'  method='GET' action='addDelivery'>".
				"<input type='hidden' name='idCustomer' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='Kirim' name='kirim' width='60px'>KIRIM</button></form>";
			echo "<form  class = 'fl'  method='GET' action='customerAddress'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='AddAddress' name='AddAddress' width='60px'>Tambah Alamat</button></form>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
</div>