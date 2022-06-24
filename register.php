<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat otentikasi data</title>
</head>

<body>
    <form action="do_register.php" method="post">
        <table>
            <tr>
                <td>ID User</td>
                <td><input type="text" name="id" maxlength="15" size="25"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" maxlength="25" size="25"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd" maxlength="15" size="25"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="daftar" value="daftar"></td>
            </tr>
        </table>
    </form>
</body>

</html>