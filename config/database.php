<?php

class Database {

    private $host = "localhost:3306";
    private $usuario = "root";
    private $senha = "";
    private $db = "busca_cep";
    private $conn;

    public function conectar() {
        try {
            $this-> conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->usuario, $this->senha);
            $this-> conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this-> conn;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


}
?>