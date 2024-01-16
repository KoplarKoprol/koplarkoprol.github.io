<?php
    include 'koneksi.php';  
?>

<!DOCTYPE html>
<html>
<head>
	<title>INPUT JURUSAN</title>
</head>
<body>
	<form action="" method="post">	
	<h3>MASTER JURUSAN</h3>	
		<table>
			<tr>
				<td>Kode Jurusan</td>
				<td><input type="text" name="KdJur" size="10"></td>
			</tr>
			<tr>
				<td>Nama Jurusan</td>
				<td><input type="text" name="NmJur" size="50"></td>
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

    mysqli_query($konek,"insert into jurusan set
    
    kd_jurusan = '$_POST[KdJur]',
    jurusan = '$_POST[NmJur]'") or die(mysqli_error($konek));
    
    echo "<script>alert('Data telah tersimpan')</script>";
}
?>