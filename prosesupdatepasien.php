<?php
include 'koneksi.php';

$nrplama = $_GET['nrp'];
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

$query = mysqli_query($koneksi, "UPDATE pasien SET nrp='$nrp',nama='$nama',ttl='$ttl',alamat='$alamat',nohp='$nohp' WHERE nrp='$nrplama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index2.php");
}else{
    echo "Gagal tambah data";
}
?>