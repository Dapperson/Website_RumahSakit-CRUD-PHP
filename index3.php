<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style> -->
</head>

<body>
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

    <div class="container-sm p-5 mb-4 rounded-3">
        <div align="center">
            <!-- tabel rata tengah -->
            <h2 class="display-5 fw-bold text-dark">Data Diagnosis Rumah Sakit</h2>
            <!-- membuat tabel untuk menampilkan data -->
            <table class="table table-hover table-bordered table-sm caption-top">
                <tr class="table-primary">
                    <!-- <tr> = table rows -->
                    <th scope="col">Kode Diagnosis </th> <!-- <th> = table header -->
                    <th scope="col">Nama </th>
                    <th scope="col">Opsi</th>
                </tr>
                <tbody>
                    <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM diagnosis") or die(mysqli_error($koneksi));
                foreach ($data as $baris){ ?>
                    <tr>
                        <td><?php echo $baris['kd_diagnosis']; ?></td>
                        <td><?php echo $baris['nama']; ?></td>
                        <td>
                            <a href="updatediagnosis.php?kd_diagnosis=<?php echo $baris['kd_diagnosis']; ?>"
                                class="btn btn-success">Update</a>
                            <a href="deletediagnosis.php?kd_diagnosis=<?php echo $baris['kd_diagnosis']; ?>"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <th>
                <a href="tambahdiagnosis.php" class="btn btn-primary d-grid gap-2">Tambah</a>
            </th>
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