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
        $this->db->query("SELECT * FROM {$this->table} ORDER BY id DESC");

        return $this->db->resultSet();
    }

    public function getProdukById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);

        return $this->db->single();
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
        $this->db->bind('gambar', $this->upload());

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

    public function ubahProduk($data)
    {
        $query = "UPDATE {$this->table} SET
                    nama = :nama,
                    harga = :harga,
                    berat = :berat,
                    kategori = :kategori,
                    deskripsi = :deskripsi,
                    gambar = :gambar
                WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('berat', $data['berat']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $this->upload());
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function upload()
    {
        $name = $_FILES["gambar"]["name"];
        $error = $_FILES["gambar"]["error"];
        $size = $_FILES["gambar"]["size"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        // Cek apakah ada file yang di upload atau tidak
        if ($error === 4) {
            return 'rog.jpg';
            die;
        }

        // Cek apakah ukuran file tidak terlau besar
        if ($size > 2_000_000) {
            echo "<script>
        alert('Ukuran file terlalu besar');
        </script>";
            return false;
            die;
        }

        // Cek ekstensi gambar
        $ekstensiGambarValid = ["jpeg", "jpg", "png"];
        $ekstensiGambarUser = explode(".", $name);
        $ekstensiFiks = strtolower(end($ekstensiGambarUser));
        if (!in_array($ekstensiFiks, $ekstensiGambarValid)) {
            echo "<script>
        alert('Yang anda upload bukan foto');
        </script>";
            return false;
            die;
        }

        // Ubah nama foto agar tidak ada nama file gambar yang sama
        $nama = uniqid();
        $nama .= '.';
        $nama .= $ekstensiFiks;

        // Pindahkan file upload ke directory kita
        move_uploaded_file($tmpName, '/opt/lampp/htdocs/tokoku/public/img/' . $nama);

        return $nama;
    }
}
