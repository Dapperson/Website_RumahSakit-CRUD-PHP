<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Rumah Sakit</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index1.php" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="index2.php" class="nav-link">Pasien</a></li>
            <li class="nav-item"><a href="index3.php" class="nav-link active">Diagnosis</a></li>
        </ul>
    </header>
</div>

<body>
    <div class="container">
        <h1>Update Data</h1>
        <?php
            include 'koneksi.php';
            $kd_diagnosis = $_GET['kd_diagnosis'];
            $data = mysqli_query($koneksi, "SELECT * FROM diagnosis WHERE kd_diagnosis = '$kd_diagnosis'") or die(mysqli_error($koneksi));
            $baris = mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
            <form action="prosesupdatediagnosis.php?kd_diagnosis=<?php echo $kd_diagnosis; ?>" method="post">
                <label for="kd_diagnosis">Kode Diagnosis</label>
                <input type="number" name="kd_diagnosis" id="kd_diagnosis" class="form-control">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
                <button type="submit" class="btn btn-primary" name="button">Update</button>
            </form>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 Roni Merdiansah</p>
        </footer>
    </div>

    <div class="b-example-divider"></div>

</body>

</html>