<?php $tipe = "Admin"; ?>

<div class="topnav">
<a href="" class="active" >Kirim</a>
<a href="">Assign Driver</a>
<a href="addNewUser">Add new user</a>
<a href="">Help</a>
</div>

<table id="table_view">
	<tr>
		<th>User ID</th>
		<th>Name</th>
		<th>Pengiriman</th>
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
			
			echo "</td>";
			echo "<td>";
			echo "<form  class = 'fl'  method='GET' action='customerAddress'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='AddAddress' name='AddAddress' width='60px'>Tambah Alamat</button></form>";
			echo "<form  class = 'fl'  method='GET' action='deleteCustomer'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='deleteCustomer' name='deleteCustomer' width='60px'><i class='fa fa-trash'></i></button></form>";
			echo "<form  class = 'fl'  method='GET' action='editCustomer'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='editCustomer' name='editCustomer' width='60px'><i class='fa fa-edit'></i></button></form>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
