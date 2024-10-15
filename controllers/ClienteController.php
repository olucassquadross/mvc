<?php
// controllers/ClienteController.php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    private $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new Cliente();
    }

    public function index()
    {
        $clientes = $this->clienteModel->getAll();
        require __DIR__ . '/../views/cliente/index.php';
    }

    public function create()
    {
        require __DIR__ . '/../views/cliente/create.php';
    }

    public function store()
    {
        $data = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
        ];

        $this->clienteModel->create($data);
        header('Location: index.php?controller=cliente&action=index');
    }
}
