<?php

class Login extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
            exit;
        } else if (isset($_SESSION['admin'])) {
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }

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
            $_SESSION['admin'] = 'Didik Prabowo';
            Flasher::setFlash('Selamat datang ' . $_SESSION['admin'], 'semoga harimu menyenangkan', 'success');
            header('Location: ' . BASEURL . '/Admin');
            exit;
        } else if ($user = $this->model('User_model')->getUser($username)) {
            if (password_verify($password, $user['password'])) {
                Flasher::setFlash('Selamat datang a', 'semoga harimu menyenangkan', 'success');
                $_SESSION['user'] = $user['nama'];
                header('Location: ' . BASEURL . '/Home');
                exit;
            } else {
                Flasher::setFlash('Username / Password salah', ', coba lagi', 'danger');
                header('Location: ' . BASEURL . '/Login');
                exit;
            }
        } else {
            Flasher::setFlash('Username / Password salah', ', coba lagi', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }
}
