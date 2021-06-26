<?php 
	$tipe = "Admin"; 
    $username = "Admin";
?>

<div class="topnav">
<a href="listUser" >Kirim</a>
<a href="listDriver" class="active" >Driver</a>
<a href="addNewDriver">Tambah Driver Baru</a>
<a href="addNewUser">Tambah User Baru</a>
<a href="">Help</a>
</div>
<form class = ''  method='GET' action='filter2'>
	<fieldset class="search">
		<legend>Search by Name</legend>
		<input class="inputSearch" type="text" name="filter2" value="" required>
		<button class="btnSearch" type="submit" value="SEARCH">Cari</button>
	</fieldset>
</form>
<table id="table_view">
	<?php
        if($result=="null"){
            echo "Cannot find the result.";
        }
        else{
        echo"<tr>";
		echo"<th> No </th>";
		echo"<th> Nama</th>";
		echo"<th> Aksi</th>";
		echo"</tr>";
	    $i=1;
		foreach ($result as $key => $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->getNameDriver()."</td>";
			$idSelect = $row->getIdDriver();
			echo "<td>";
			echo "<form  class = 'fl'  method='GET' action='deleteDriver'>".
				"<input type='hidden' name='id' value='$idSelect'/>" .
				"<button class ='btnlist' type='submit' value='deleteDriver' name='deleteDriver' width='60px'><i class='fa fa-trash'></i></button></form>";
			echo "<button class ='btnlist' type='submit' id = '$idSelect'value='$idSelect' onclick=UpdateUser(this.id) name='editCustomer' width='60px'><i class='fa fa-edit'></i></button>";
			echo "</td>";
			echo "</tr>";
			$i++;
		}
    }
	?>
</table>
<br>
<hr>
<?php 
for ($i=1; $i<=$pageCount ; $i++){ ?>
	<form  class = 'fl'  method='POST' action='pagination2'><button class="btnlist" name = "pageDriver" value = <?php echo ($i-1)*10; ?>><?php echo $i; ?></button></form>
<?php 
} 
?>
<br><br><br>
<hr>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="listDriver/updateDriver" method="post">
            <table>
                <tr>
                    <td><label for="textID">Update Driver with ID</label></td>
                    <td><input type="text" value="" class="inputtextdis" id="IdUser" name="ID" style="background-color: #d3d3d3" readOnly></td>
                </tr>
                <br>
				<tr>
                    <td><label for="NUser">New User Name</label></td>
                    <td><input type="text" class="inputtext" name="newName" required><br></td>
                </tr>
                <tr>
                    <td><label for="Nupass">New Password</label></td>
                    <td><input type="text" class="inputtext" name="newPassword" required><br></td>
                </tr>
            </table>      
            <input type="submit" class="" value="UPDATE" ></input>
        </form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function UpdateUser(x) {
  modal.style.display = "block";
  document.getElementById("IdUser").value = x;
}

  

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>