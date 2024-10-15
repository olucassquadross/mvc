<!-- views/cliente/index.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="index.php?controller=cliente&action=create">Adicionar Cliente</a>
    <ul>
        <?php foreach ($clientes as $cliente): ?>
            <li><?php echo $cliente['nome'] . ' - ' . $cliente['email'] . ' - ' . $cliente['telefone']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
