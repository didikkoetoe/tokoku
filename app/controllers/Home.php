<?php

class Home extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'nama' => $_SESSION['user'],
            'produk' => $this->model('Produk_model')->getAllProduk()
        ];

        $this->view('public/header', $data);
        $this->view('home/index', $data);
        $this->view('public/footer');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Produk',
            'nama' => $_SESSION['user'],
            'produk' => $this->model('Produk_model')->getProdukById($id)
        ];
        $this->view('public/header', $data);
        $this->view('home/detail', $data);
        $this->view('public/footer');
    }
}
