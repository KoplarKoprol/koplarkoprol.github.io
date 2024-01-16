<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input User</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .center-div {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="center-div">


        <table align="center">
            <form method="POST" action="">
                <tr>
                    <div>
                        <td><label>Username :</label></td>
                        <td> <input type="text" name="username" id=""></td>

                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>Password :</label></td>
                        <td><input name="password" type="password">
                        </td>
                    </div>
                </tr>
                <tr>
                    <div>
                        <td><Label>Hak Akses :</Label></td>
                        <td><select name="akses" id="">
                                <option value="-">- -</option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
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

        username = '$_POST[username]',
        password = '$_POST[password]',
        akses = '$_POST[akses]'") or die(mysqli_error($konek));

            echo "<script>alert('Data telah tersimpan pada database $database')</script>";
        }
        ?>
    </div>
</body>

</html>