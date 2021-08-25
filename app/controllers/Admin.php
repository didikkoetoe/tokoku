<?php

/**
 * Controller Home yang extend ke class Controller
 */
class Admin extends Controller
{
	public function index()
	{
		$data = [
			'title' => 'Admin',
			'produk' => $this->model('Produk_model')->getALlProduk()
		];

		$this->view('templates/header', $data);
		$this->view('admin/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if ($this->model('Produk_model')->tambahProduk($_POST) > 0) {
			Flasher::setFlash('Berhasil', 'di tambahkan', 'success');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		} else {
			Flasher::setFlash('Gagal', 'di tambahkan', 'danger');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		}
	}

	public function hapus($id)
	{
		if ($this->model('Produk_model')->hapusProduk($id) > 0) {
			Flasher::setFlash('Berhasil', 'di hapus', 'success');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		} else {
			Flasher::setFlash('Gagal', 'di hapus', 'danger');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		}
	}
}
