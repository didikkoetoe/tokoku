<?php

class User_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function tambahUser($data)
    {
        $data['password'] = password_hash(stripslashes($data['password']), PASSWORD_DEFAULT);


        $query = "INSERT INTO {$this->table} (nama, email, username, jenisKelamin, alamat, password) VALUES (:nama, :email, :username, :jenisKelamin, :alamat, :password)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('jenisKelamin', $data['jenisKelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getUser($username)
    {

        $this->db->query("SELECT * FROM {$this->table} WHERE username=:username");

        $this->db->bind('username', $username);

        return $this->db->single();
    }
}
