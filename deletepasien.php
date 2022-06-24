<?php
include 'koneksi.php';
$nrp = $_GET['nrp'];

$query = mysqli_query($koneksi, "DELETE FROM pasien WHERE nrp='$nrp'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index2.php");
}else{
    echo "Gagal Menghapus";
}

?>