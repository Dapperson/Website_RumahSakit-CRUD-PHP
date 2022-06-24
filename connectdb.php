<?php
$db = "dbcontoh";  
$host = "localhost"; 
$username = "root"; 
$password = ""; 

$conn = mysqli_connect($host, $username, $password, $db);

if(mysqli_connect_errno()){
    echo "koneksi ke server database gagal";
    exit();
}

?>