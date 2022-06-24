<?php
include 'koneksi.php';
$kd_diagnosis = $_GET['kd_diagnosis'];

$query = mysqli_query($koneksi, "DELETE FROM diagnosis WHERE kd_diagnosis='$kd_diagnosis'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index3.php");
}else{
    echo "Gagal Menghapus";
}

?>