<?php

class User extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Akun'
        ];

        $this->view('user/index');
    }

    public function tambahUser()
    {
        if ($this->model('User_model')->tambahUser($_POST) > 0) {
            Flasher::setFlash('Registri akun', 'berhasil', 'success');
            header('Location: ' . BASEURL . '/Login');
            exit;
        } else {
            Flasher::setFlash('Registri akun', 'gagal', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }
}
