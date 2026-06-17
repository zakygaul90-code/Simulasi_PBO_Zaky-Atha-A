<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "DB_SIMULASI_PBO_KELAS_NamaLengkap";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>