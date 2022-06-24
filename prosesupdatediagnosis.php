<?php
include 'koneksi.php';

$kd_diagnosislama = $_GET['kd_diagnosis'];
$kd_diagnosis = $_POST['kd_diagnosis'];
$nama = $_POST['nama'];

$query = mysqli_query($koneksi, "UPDATE diagnosis SET kd_diagnosis='$kd_diagnosis',nama='$nama' WHERE kd_diagnosis='$kd_diagnosislama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index3.php");
}else{
    echo "Gagal tambah data";
}
?>