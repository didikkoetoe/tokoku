<?php

class Login extends Controller
{
    // public function __construct()
    // {
    //     $_SESSION['admin'] = true;
    // }

    public function index()
    {
        // if ($this->model('Admin_model')->getAdmin($_POST) > 0) {
        //     header('Location: ' . BASEURL . '/Admin');
        //     exit;
        // } else {
        //     Flasher::setFlash('Username / Password', 'salah', 'success');
        //     header('Location: ' . BASEURL . '/Login');
        //     exit;
        // }

        $data = [
            'title' => 'Login',
        ];

        $this->view('login/login', $data);
    }
}
