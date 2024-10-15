<!-- views/cliente/create.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="index.php?controller=cliente&action=store" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone"><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
