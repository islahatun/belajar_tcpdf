<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Siswa</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Daftar Hadir Siswa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#tambahsiswa">Tambah Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Siswa/cetak') ?>">Cetak Laporan</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahsiswa">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="tambahsiswa" tabindex="-1" aria-labelledby="tambahsiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahsiswaLabel">Tambah Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Siswa/tambah') ?>" method="post">
                        <div class="row g-3 align-items-center">
                            <div class="row">
                                <div class="col">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">NISN</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nisn">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">NIS</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nis">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">NAMA</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>