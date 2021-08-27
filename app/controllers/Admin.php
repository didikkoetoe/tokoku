<?php

/**
 * Controller Home yang extend ke class Controller
 */
class Admin extends Controller
{

	public function __construct()
	{
		if ($_SESSION['admin'] !== 'Didik Prabowo') {
			header('Location: ' . BASEURL . '/Login');
			exit;
		}
	}

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
			Flasher::setFlash('Data produk berhasil', 'di tambahkan', 'success');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		} else {
			Flasher::setFlash('Data produk gagal', 'di tambahkan', 'danger');
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

	public function logout()
	{
		session_destroy();
		session_unset();
		$_SESSION = [];

		header('Location: ' . BASEURL . '/Login');
		exit;
	}

	public function getUbah()
	{
		echo json_encode($this->model('Produk_model')->getProdukById($_POST['id']));
	}

	public function ubah()
	{
		if ($this->model('Produk_model')->ubahProduk($_POST) > 0) {
			Flasher::setFlash('Data produk berhasil', 'di ubah', 'success');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		} else {
			Flasher::setFlash('Data produk gagal', 'di ubah', 'danger');
			header('Location: ' . BASEURL . '/Admin');
			exit;
		}
	}

	public function cari()
	{
		$data = [
			'title' => 'Admin',
			'produk' => $this->model('Produk_model')->cariProduk()
		];

		$this->view('templates/header', $data);
		$this->view('admin/index', $data);
		$this->view('templates/footer');
	}

	public function cetak()
	{
		$data = [
			'produk' => $this->model('Produk_model')->getALlProduk()
		];
		$this->view('cetak', $data);
	}
}
