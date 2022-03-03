<?php

class conexao {
    private $dataBase = 'gabriel';
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct()
    {
        try {
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dataBase}",
                $this->username,
                $this->password
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn = $conn;
        } catch (PDOException $e) {
            print('<script>alert(\'Falha ao conectar com o banco de dados\');</script>');
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function executaSql($sql)
    {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_NUM);
        } catch (Exception $e) {
            print('<script>alert(\'Falha ao buscar os dados\');</script>');
        }
    }
}
