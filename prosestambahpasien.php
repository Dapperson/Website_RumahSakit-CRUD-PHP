<?php
include 'koneksi.php';

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

$query = mysqli_query($koneksi, "INSERT INTO pasien (nrp, nama, ttl, alamat, nohp) 
VALUES ('$nrp', '$nama', '$ttl', '$alamat', '$nohp')");

if($query){
    header("Location: index2.php");
}else{
    echo "Gagal tambah data";
}
?>