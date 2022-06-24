<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat otentikasi user</title>
</head>

<body>
    <h2>Status Registrasi</h2>
    <?php
        if(isset($_POST['daftar'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $pwd = $_POST['pwd'];

            require("connectdb.php");
            $sql = "insert into webuser(id,nama,pwd) values('$id','$nama','$pwd')"; //beda
            mysqli_query($conn, $sql);
            $num = mysqli_affected_rows($conn);
            if($num>0){
                ?>
    Selaat anda sudah terdaftar di website kami. <br>
    [ <a href="login.php">Login</a> ] <br><br>
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><strong><?php echo $id; ?></strong></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><strong><?php echo $nama; ?></strong></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><strong><?php echo $pwd; ?></strong></td>
        </tr>
    </table>
    <?php
            }else{
                ?>
    Proses registrasi gagal. silahkan ulangi. <br>
    [ <a href="register.php">Registrasi Kembali</a> ]
    <?php
            }
        }
    ?>
</body>

</html>