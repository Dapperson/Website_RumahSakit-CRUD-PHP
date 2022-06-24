<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
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
            <li class="nav-item"><a href="index2.php" class="nav-link active">Pasien</a></li>
            <li class="nav-item"><a href="index3.php" class="nav-link">Diagnosis</a></li>
        </ul>
    </header>
</div>

<body>
    <div class="container">
        <h1>Tambah Data</h1>
        <div class="col-md-6">
            <form action="prosestambahpasien.php" method="post">
                <label for="nrp">NRP</label>
                <input type="number" name="nrp" id="nrp" class="form-control">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
                <label for="ttl">Tempat, Tanggal Lahir</label>
                <input type="text" name="ttl" id="ttl" class="form-control">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
                <label for="nohp">No HP</label>
                <input type="number" name="nohp" id="nohp" class="form-control">
                <button type="submit" class="btn btn-primary" name="button">Tambah</button>
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