<?php
include 'koneksi.php';

$kd_diagnosis = $_POST['kd_diagnosis'];
$nama = $_POST['nama'];

$query = mysqli_query($koneksi, "INSERT INTO diagnosis (kd_diagnosis, nama) 
VALUES ('$kd_diagnosis', '$nama')");

if($query){
    header("Location: index3.php");
}else{
    echo "Gagal tambah data";
}
?>