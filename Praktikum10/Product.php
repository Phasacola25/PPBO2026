<?php

require_once "DatabaseConnection.php";

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    // CREATE: Menambah data produk
    public function save($data)
    {
        // Menambahkan NOW() untuk mengisi kolom created_at secara otomatis
        $sql = "INSERT INTO products (nama, deskripsi, harga, stok, created_at) 
                VALUES (:nama, :deskripsi, :harga, :stok, NOW())";
                
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':nama'      => $data['nama'],
            ':deskripsi' => $data['deskripsi'],
            ':harga'     => $data['harga'],
            ':stok'      => $data['stok']
        ]);
    }
    // READ: Mengambil semua data produk
    public function findAll()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // READ: Mengambil satu data produk berdasarkan ID
    public function findById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // UPDATE: Perbarui data produk
    public function update($id, $data)
    {
        $sql = "UPDATE products SET nama = :nama, deskripsi = :deskripsi, harga = :harga, stok = :stok WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':nama'      => $data['nama'],
            ':deskripsi' => $data['deskripsi'],
            ':harga'     => $data['harga'],
            ':stok'      => $data['stok'],
            ':id'        => $id
        ]);
    }

    // DELETE: Hapus data produk
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}