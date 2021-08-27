<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Detail</h5>
        <div class="card-body">
            <img src="<?= BASEURL; ?>/img/<?= $data['produk']['gambar']; ?>" class="rounded float-start img-thumbnail w-25 mx-3" alt="...">
            <h5 class="card-title">Nama Produk : <?= $data['produk']['nama']; ?></h5>
            <p class="card-text">Harga : Rp. <?= $data['produk']['harga']; ?></p>
            <p class="card-text">Berat : <?= $data['produk']['berat']; ?> Kg</p>
            <p class="card-text">Kategori : <?= $data['produk']['kategori']; ?></p>
            <p class="card-text">Deskripsi : <?= $data['produk']['deskripsi']; ?></p>
            <a href="<?= BASEURL; ?>" class="btn btn-primary">Kembali</a>
            <a href="<?= BASEURL; ?>/User/cetak/<?= $data['produk']['id']; ?>" class=" btn btn-success">Beli</a>
        </div>
    </div>
</div>