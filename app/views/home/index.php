<div class="container-fluid my-3">

    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item">
                        <img src="<?= BASEURL; ?>/img/store.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                        <img src="<?= BASEURL; ?>/img/rog.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= BASEURL; ?>/img/str.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <h3 class="text-center">Daftar Produk</h3>
    <hr>

    <div class="row">
        <?php foreach ($data['produk'] as $produk) : ?>
            <div class="col-4 mb-3">
                <div class="card">
                    <img src="<?= BASEURL; ?>/img/<?= $produk['gambar']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produk['nama']; ?></h5>
                        <p class="card-text"><strong>Deskripsi : <br></strong><?= $produk['deskripsi']; ?></p>
                        <a href="<?= BASEURL; ?>/Home/detail/<?= $produk['id']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>