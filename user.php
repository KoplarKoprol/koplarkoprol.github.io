<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
</head>

<body>
    <table>
        <tr>
            <td>
                <H3>"Masukan Data Pengguna"</H3>
            </td>
        </tr>
        <form method="POST" action="">
            <tr>
                <div>
                    <td><label>ID</label>
                        <input type="text" name="User ID" id="">
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td><label>Nama Pengguna :</label>
                        <input name="namaPengguna" type="text">
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td><label>Nama Lengkap :</label>
                        <input name="namaLngkp" type="text">
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td><label>Tempat Lahir</label>
                        <input type="text" name="tmplhir" id="">
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td><label>Tanggal Lahir :</label>
                        <input name="tgllhir" type="date">
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td><label>Alamat</label>
                        <input name="alamat" type="text">
                    </td>
                </div>
            </tr>
            <tr>
                <div>
                    <td><Label>Jurusan :</Label>
                        <select name="jurusan" id="">
                            <option value="-">- Pilih Jurusan -</option>
                            <option value="Akutansi">Akutansi</option>
                            <option value="Perkantoran">Perkantoran</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Desain Komputer Visual">Desain Komputer Visual</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        </select>
                    </td>
                </div>
            </tr>
            <tr>
                <td>
                    <div>
                        <input value="simpan" type="submit" name="save">
                    </div>
                </td>
            </tr>
        </form>
    </table>
    <?php
    if (isset($_POST['save'])) {
        mysqli_query($konek, "insert into user set
        
        Nis = '$_POST[nis]',
        Nama = '$_POST[namaPengguna]',
        NamaLengkap = '$_POST[namaLengkap]',
        Tempat_lahir = '$_POST[tmplhir]',
        Tanggal_lahir = '$_POST[tgllhir]',
        alamat = '$_POST[alamat]',
        Jurusan = '$_POST[jurusan]'") or die(mysqli_error($konek));

        echo "<script>alert('Data telah tersimpan pada database $database')</script>";
    }
    ?>
</body>

</html>