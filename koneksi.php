<?php
class Database
{
    //property
    public $host = "localhost", $user = "root", $pass="123", $db = "login";
    public $koneksi;

    //method
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
    }
}
include 'data_diri.php';
$db = new Database();