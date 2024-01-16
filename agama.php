<?php
    include 'koneksi.php';  
?>

<!DOCTYPE html>
<html>
<head>
	<title>INPUT AGAMA</title>
</head>
<body>
	<form action="" method="post">	
	<h3>MASTER AGAMA</h3>	
		<table>
			<tr>
				<td>Kode Agama</td>
				<td><input type="text" name="KdAgama" size="10"></td>
			</tr>
			<tr>
				<td>Nama Agama</td>
				<td><input type="text" name="NamaAgama" size="50"></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="save" value="simpan"></td>
						
			</tr>
		</table>
	</form>
	<br>
	<hr>
	<br>


</body>
</html>

<?php

if(isset($_POST['save'])){

    mysqli_query($konek,"insert into agama set
    
    kd_agama = '$_POST[KdAgama]',
    agama = '$_POST[NamaAgama]'") or die(mysqli_error($konek));
    
    echo "<script>alert('Data telah tersimpan')</script>";
}
?>