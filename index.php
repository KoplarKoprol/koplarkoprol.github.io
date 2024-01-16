<?php
session_start();
// Cek sudah login apa belum
if (!$_SESSION) {
  header('location:formlogin.php');
}
include "koneksi.php";
date_default_timezone_set("Asia/Kuala_lumpur")
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miau</title>
  </head>
  <body>
    <?php
      include "tampil.php";   
    ?>
  </body>
  </html>
 