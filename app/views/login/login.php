<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="container border rounded shadow my-5 bg-white">
                    <h2 class="text-center my-3">Login</h2>

                    <?= Flasher::flash(); ?>

                    <hr>
                    <form action="<?= BASEURL; ?>/Login/login" method="POST">
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                <input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="Masukan Username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-shield-lock-fill"></i></div>
                                <input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Masukan password" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="ingat">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="login" class="btn btn-primary col-12">Masuk</button>
                        </div>

                        <p class="text-center">Atau</p>

                        <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>

</body>

</html>

<!-- Modal form tambah user -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daftar Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/User/tambahUser" method="POST">

                    <!-- Nama lengkap -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" name="nama" placeholder="Masukan nama lengkap" required class="form-control">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                            <input type="email" name="email" placeholder="Masukan email" required class="form-control">
                        </div>
                    </div>

                    <!-- Username -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person-circle"></i></div>
                            <input type="text" name="username" placeholder="Masukan username" required class="form-control">
                        </div>
                    </div>

                    <!-- Jenis kelamin -->
                    <div class="mb-3">
                        <label for="kelamin">Jenis Kelamin </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="laki_laki" value="Laki-laki">
                            <label class="form-check-label" for="laki_laki">Laki - laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" id="Perempuan" value="perempuan">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>

                    <!-- Alamat rumah -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-house-door"></i></div>
                            <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Masukan alamat rumah" required class="form-control"></textarea>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                            <input type="password" name="password" placeholder="Masukan password" required class="form-control">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-shield-lock-fill"></i></div>
                            <input type="password" name="password2" placeholder="Masukan kembali password" required class="form-control">
                        </div>
                    </div>
                    <p class="text-center">Dengan mengeklik daftar berarti anda menyetujui syarat dan ketentuan kami.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
            </form>
        </div>
    </div>
</div>