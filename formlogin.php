<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login User</title>
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
            <form method="POST" action="login.php">
                <tr>
                    <div>
                        <td><label>Username :</label></td>
                        <td> <input type="text" name="username" id="" required></td>

                    </div>
                </tr>
                <tr>
                    <div>
                        <td><label>Password :</label></td>
                        <td><input name="password" type="password" required>
                        </td>
                    </div>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <div>
                            <input value="log in" type="submit" name="save">
                        </div>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>