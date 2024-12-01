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
    <title>Finalizar Compra</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Finalizar Compra</h1>
    </header>

    <main>
        <h2>Resumo do Pedido</h2>
        <ul id="cart-list"></ul>
        <p id="cart-total">Total: R$ 0,00</p>

        <form action="pedido_action.php" method="POST">
            <label for="forma_pagamento">Forma de Pagamento</label>
            <select name="forma_pagamento" id="forma_pagamento" required>
                <option value="dinheiro">Dinheiro</option>
                <option value="pix">Pix</option>
                <option value="cartao">Cartão de Crédito</option>
            </select>

            <label for="entrega">Tipo de Entrega</label>
            <select name="entrega" id="entrega" required>
                <option value="retirar">Retirar na loja</option>
                <option value="entrega">Entrega (R$ 10,00)</option>
            </select>

            <button type="submit">Concluir Compra</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Cupcake Store. Todos os direitos reservados.</p>
    </footer>

    <script src="cart.js"></script>
</body>
</html>
