<?php
    include 'koneksi.php';  
?>

<!DOCTYPE html>
<html>
<head>
	<title>INPUT SISWA</title>
</head>
<body>
	<form action="" method="post">	
	<h3>MASTER SISWA</h3>	
		<table>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nonis" size="10"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nm" size="50"></td>
			</tr>
				<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tmp" size="50"></td>
			</tr>
				<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl" size="50"></td>
			</tr>
			<tr>
				<td>Agama<td>
					<select class="form-control" name="Agama" required>
					<option value="">--Pilih Agama--</option>
					<?php
					$Agama = mysqli_query($konek,"select * from agama");
					while($data = mysqli_fetch_array($Agama)){
						?>
						<option value="<?php echo $data['kd_agama'] ?>"><?php echo $data['agama']; ?></option>
						<?php
					}
					?>
				</select>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat" size="50"></td>
			</tr>

			<tr>
				<td>Jurusan<td>
				<select class="form-control" name="Jurusan" required>
					<option value="">--Pilih Jurusan--</option>
					<?php
					$Jurusan = mysqli_query($konek,"select * from jurusan");
					while($data = mysqli_fetch_array($Jurusan)){
						?>
						<option value="<?php echo $data['kd_jurusan'] ?>"><?php echo $data['jurusan']; ?></option>
						<?php
					}
					?>
				</select>
			<tr>
				<td><input type="submit" name="save" value="simpan"></td>
						
			</tr>
		</table>
	</form>
	<br>
	<hr>
	<br>


	<table border="1">
		<thead>
			<tr>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Jurusan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$siswa = mysqli_query($konek,"SELECT siswa.nis, siswa.nama, siswa.tmp_lahir, siswa.tgl_lahir, agama.agama, siswa.alamat, jurusan.jurusan from siswa INNER JOIN agama ON siswa.kd_agama=agama.kd_agama INNER JOIN jurusan ON siswa.kd_jurusan=jurusan.kd_jurusan");
			while($data = mysqli_fetch_array($siswa)){
				?>
				<tr>
					<td><?php echo $data['nis']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['tmp_lahir']; ?></td>
					<td><?php echo $data['tgl_lahir']; ?></td>
					<td><?php echo $data['agama']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td><?php echo $data['jurusan']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>


</body>
</html>

<?php

if(isset($_POST['save'])){

    mysqli_query($konek,"insert into siswa set
    
    nis = '$_POST[nonis]',
    nama = '$_POST[nm]',
    tmp_lahir = '$_POST[tmp]',
    tgl_lahir = '$_POST[tgl]',
    kd_agama = '$_POST[Agama]',
    alamat = '$_POST[Alamat]',
    kd_jurusan = '$_POST[Jurusan]'") or die(mysqli_error($konek));
    
    echo "<script>alert('Data telah tersimpan')</script>";
    header("location:inputsiswa.php");

}
?>