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
<body><h3 style ="text-align:center;">10 Driver dengan pengiriman terbanyak Bulan ini</h3> <table id="table_view">
		<tr>
		<th>No</th>
		<th>Driver</th>
		<th>Jumlah dikirim</th>
	</tr>';
	$i=1;
		foreach ($result as $key => $row) {
			$html .='<tr> <td>' .$i++ . '</td>
			<td>'.$row->getDriverName().'</td>
			<td>'.$row->getJumlahPengiriman().' Pengiriman</td>
			</tr>';
		}
	$html .='</table></body></html>';
 phptopdf_html($html,'', 'pdf1.pdf');
  
 // OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
 //echo ("<a href='pdf1.pdf'>Download Your PDF</a>");
?> 