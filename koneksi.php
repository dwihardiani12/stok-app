<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id5688227_stok_barang"; //root
    private $password = "hardiani123"; //""
    private $db = "id5688227_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>