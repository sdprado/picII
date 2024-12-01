<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pedidos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Meus Pedidos</h1>
    </header>

    <main>
        <h2>Pedidos Realizados</h2>
        <!-- Exibir os pedidos do usuário aqui -->
    </main>

    <footer>
        <p>&copy; 2024 Cupcake Store. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
