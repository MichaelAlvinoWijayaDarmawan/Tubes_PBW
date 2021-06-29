<?php
 // INCLUDE THE phpToPDF.php FILE
 require("phpToPDF.php"); 
 
 // GENERATE PDF FILE FROM SPECIFIED URL, SAVES TO CURRENT DIRECTORY ('')
 $html = '<!DOCTYPE html>
<html>
<head>
  <style>#table_view {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  align: center;
  margin-left: auto;
  margin-right: auto;
  text-align: center;

  align-items: center;
}

#table_view td, #table_view th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  align: center;
  width: auto;
  
}

#table_view tr:nth-child(even){background-color: #f2f2f2;}

#table_view tr:hover {background-color: #ddd;}

#table_view th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #006699;
  color: white;
  
}</style>
</head>
<body><h3 style ="text-align:center;">Daftar Pengiriman yang berhasil di antar bulan ini</h3> <table id="table_view">
		<tr>
		<th>No</th>
		<th>Nama Kategori</th>
		<th>Jumlah Pengiriman</th>
	</tr>';
	$i=1;
		foreach ($result as $key => $row) {
			$html .='<tr> <td>' .$i++ . '</td>
			<td>'.$row->getKategoriBarang().'</td>
			<td>'.$row->getJumlahPengiriman().'</td>
			</tr>';
		}
	$html .='</table></body></html>';
 phptopdf_html($html,'', 'pdf3.pdf');
  
 // OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
 //echo ("<a href='pdf3.pdf'>Download Your PDF</a>");
?> 