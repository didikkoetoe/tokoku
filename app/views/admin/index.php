<div class="container-fluid mt-3">

	<!-- Tombol tambah data -->
	<button type="button" class="btn btn-primary float-end tombolTambah" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Produk</button>

	<h2 class="text-center">Daftar Produk</h2>

	<!-- Alert -->
	<?= Flasher::flash(); ?>

	<hr>
	<div class="row">
		<div class="col-2">
			<h4 class="text-center">Kategori <i class="bi bi-filter"></i></h4>
			<ul class="list-group">
				<li class="list-group-item">An item</li>
				<li class="list-group-item">A second item</li>
				<li class="list-group-item">A third item</li>
				<li class="list-group-item">A fourth item</li>
				<li class="list-group-item">And a fifth one</li>
			</ul>
		</div>

		<div class="col-10">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">Harga</th>
						<th scope="col">Berat</th>
						<th scope="col">Kategori</th>
						<th scope="col">Deskripsi</th>
						<th scope="col">Gambar</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1 ?>
					<?php foreach ($data['produk'] as $produk) : ?>
						<tr>
							<th><?= $i++; ?></th>
							<td><?= $produk['nama']; ?></td>
							<td><?= $produk['harga']; ?></td>
							<td><?= $produk['berat']; ?></td>
							<td><?= $produk['kategori']; ?></td>
							<td><?= $produk['deskripsi']; ?></td>
							<td>
								<img src="<?= BASEURL; ?>/img/<?= $produk['gambar']; ?>" alt="">
							</td>
							<td>
								<a href="<?= BASEURL; ?>/Admin/edit/<?= $produk['id']; ?>" class="btn btn-warning edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $produk['id']; ?>">Edit</a>

								<a href="<?= BASEURL; ?>/Admin/hapus/<?= $produk['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menhapus ?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>

<!-- Modal form tambah produk -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Tambah Produk</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL; ?>/Admin/tambah" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="id" id="id">

					<!-- Nama -->
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-text"><i class="bi bi-file-earmark-text-fill"></i></div>
							<input type="text" id="nama" name="nama" class="form-control" required placeholder="Masukan nama barang">
						</div>
					</div>

					<!-- Harga -->
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-text"><i class="bi bi-cash-coin"></i></div>
							<input type="number" id="harga" name="harga" class="form-control" required placeholder="Masukan harga barang">
						</div>
					</div>

					<!-- Berat -->
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-text"><i class="bi bi-gear"></i></div>
							<input type="number" id="berat" name="berat" class="form-control" required placeholder="Masukan berat barang">
						</div>
					</div>

					<!-- Kategori -->
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-text"><i class="bi bi-filter"></i></div>
							<select name="kategori" id="kategori" class="form-select" aria-label="Default select example">
								<option selected value="All">Pilih Kategori</option>
								<option value="All">All</option>
								<option value="Buku">Buku</option>
								<option value="Komputer">Komputer</option>
								<option value="Handphone">Handphone</option>
								<option value="Elektronik">Elektronik</option>
							</select>
						</div>
					</div>

					<!-- Deskripsi -->
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-text"><i class="bi bi-justify-left"></i></div>
							<textarea name="deskripsi" id="deskripsi" cols="10" rows="4" class="form-control" placeholder="Masukan deskripsi" required></textarea>
						</div>
					</div>

					<!-- Gambar -->
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-text"><i class="bi bi-image"></i></div>
							<input id="gambar" type="file" name="gambar" required class="form-control">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Produk</button>
				</form>
			</div>
		</div>
	</div>
</div>