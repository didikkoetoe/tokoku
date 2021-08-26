<?php

class User extends Controller
{
    public function tambahUser()
    {
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // if($this->model('User_model')->)

        if ($password !== $password2) {
            Flasher::setFlash('Password tidak sama', ', ulangi lagi', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }

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

    public function logout()
    {
        session_destroy();
        $_SESSION = [];
        session_unset();

        header('Location: ' . BASEURL);
        exit;
    }
}
