<?php

class Produk_model
{
    private $table = 'produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getALlProduk()
    {
        $this->db->query("SELECT * FROM {$this->table}");

        return $this->db->resultSet();
    }

    public function tambahProduk($data)
    {
        $query = "INSERT INTO {$this->table} (nama, harga, berat, kategori, deskripsi, gambar) VALUES (:nama, :harga, :berat, :kategori, :deskripsi, :gambar)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('berat', $data['berat']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusProduk($id)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
