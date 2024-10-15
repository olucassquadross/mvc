<?php
// models/Cliente.php
require_once __DIR__ . '/../config/database.php';

class Cliente
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO clientes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'telefone' => $data['telefone']
        ]);
    }
}
