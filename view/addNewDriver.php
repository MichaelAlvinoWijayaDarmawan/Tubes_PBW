<?php 
	$tipe = "Admin";
	$username = "Admin";
?>

<div class="topnav">
<a href="listUser" >Kirim</a>
<a href="listDriver">Driver</a>
<a href="addNewDriver"class="active">Tambah Driver Baru</a>
<a href="addNewUser">Tambah User Baru</a>

</div>


<fieldset>
    <legend>Tambah Driver Baru</legend>
    <br>
    <form method="POST" action="addNewDriver">
        <label>Nama Driver :
        <br>
        <input type="text" name="name" required> </label>
        <br><br>
        <label>Password :
        <br>
        <input type="password" name="password" required> </label>
        <br><br>
        <label>Tanggal Mulai Kerja : 
        <br>
        <input type="date" name="tanggalMulai" required> </label>
        <br><br>
        <label>Masa Kerja :
        <br>
        <input type="date" name="masaKerja" ></label>
        </br>
        <button class="btnlist" type="submit" value="ADD" name='addDataDriver' onclick="myFunction2()">Tambah</button>
        <a href="listUser">Back</a>
    </form>
</fieldset>
<script>
function myFunction2() {
  alert("Are you sure want to submit?");
}
</script>