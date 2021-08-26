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
        ];

        $this->view('public/header', $data);
        $this->view('home/index');
        $this->view('public/header');
    }
}
