<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/home.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tokoku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="input-group w-50 me-5">
                <input class="form-control" type="search" placeholder="Cari Barang" aria-label="Search">
                <div class="input-group-text"><i class="bi bi-search"></i></div>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <!-- Cart -->
                    <a class="nav-link" aria-current="page" href="#"><i class="bi bi-cart-fill fs-5 me-3 mx-5"></i></a>
                    <!-- Bell -->
                    <a class="nav-link" href="#"><i class="bi bi-bell-fill fs-5 me-3"></i></a>
                    <!-- Message -->
                    <a class="nav-link" href="#"><i class="bi bi-envelope-fill fs-5 me-3"></i></a>

                </div>
            </div>
            <div class="d-flex">
                <div class="dropdown me-2">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><?= $data['nama']; ?></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Setting Akun</a></li>
                        <li><a class="dropdown-item" href="#">Ubah Tema</a></li>
                        <li><a class="dropdown-item" href="#">Hal Lain</a></li>
                    </ul>
                </div>

                <a href="<?= BASEURL; ?>/User/logout" class="btn btn-danger" onclick="return confirm('Yakin ingin keluar ?');">Logout</a>
            </div>
        </div>
    </nav>