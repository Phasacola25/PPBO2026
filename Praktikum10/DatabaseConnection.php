<?php

class DatabaseConnection
{
    private static $instance = null;
    private $conn;

    private function __construct()
    {
        // Menggunakan 127.0.0.1 untuk menghindari kendala koneksi lokal di Windows
        $host = "127.0.0.1";
        $db   = "db_produk";
        $user = "root";
        $pass = "";

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}