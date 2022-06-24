<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat otentikasi data</title>
</head>

<body>
    <?php
        if(isset($_POST['login'])){
            $id = $_POST['id'];
            $pwd = $_POST['pwd'];

            require('connectdb.php');
            $sql = mysqli_query($conn, "SELECT nama FROM webuser WHERE id = '$id' and pwd = md5('$pwd')");
            if($sql){
                header("Location:index1.php");
            }else{
                echo "Gagal Login";
            }}
                ?>
</body>

</html>