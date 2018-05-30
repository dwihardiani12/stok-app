<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id5944669_dev_1"; //root
    private $password = "udin1234"; //""
    private $db = "id5944669_projekuasweb";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>