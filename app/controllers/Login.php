<?php

class Login extends Controller
{
    // public function __construct()
    // {
    //     $_SESSION['admin'] = true;
    // }

    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        $this->view('login/login', $data);
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->model('Admin_model')->getAdmin($username, $password) > 0) {
            Flasher::setFlash('Selamat datang Admin', 'semoga harimu menyenangkan', 'success');
            $_SESSION['admin'] = 'Didik Prabowo';
            header('Location: ' . BASEURL . '/Admin');
            exit;
        } else {
            Flasher::setFlash('Username / Password salah', ', coba lagi', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }
}
