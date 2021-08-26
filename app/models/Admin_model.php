<?php

class Admin_model
{
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAdmin($username, $password)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE username=:username AND password=:password");

        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
