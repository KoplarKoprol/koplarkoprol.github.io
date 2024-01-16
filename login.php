<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($konek, "select * from user where Username='$username' and Password='$password'");

if (mysqli_num_rows($sql) > 0) {
    $data = mysqli_fetch_array($sql);
    $_SESSION['username'] = $data['username'];
    header("Location: tampil.php");
} else {
    echo "<h1>login gagal, ketikkan username dan Password dengan betul.</h1>
     <p><a href='formlogin.php'>ha'ah lah</a></p> ";
}
?> 