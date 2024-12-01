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
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>
<body>
    <header>
        <h1>Bem-vindo, <?php echo $_SESSION['user']['nome']; ?>!</h1>
        <p>Explore nossos cupcakes deliciosos!</p>
    </header>

    <main>
        <div class="cupcake">
            <div class="cupcake-item">
                <img src="img/cupcake1.png" alt="Cupcake 1">
                <p>Cupcake de Chocolate - R$ 05,00</p>
                <button class="add-to-cart" data-id="1" data-name="Cupcake de Chocolate" data-price="5.00">Comprar</button>
            </div>
            <div class="cupcake-item">
                <img src="img/cupcake2.png" alt="Cupcake 2">
                <p>Cupcake de Baunilha - R$ 06,00</p>
                <button class="add-to-cart" data-id="2" data-name="Cupcake de Baunilha" data-price="6.00">Comprar</button>
            </div>
            <div class="cupcake-item">
                <img src="img/cupcake3.png" alt="Cupcake 3">
                <p>Cupcake de Morango - R$ 07,00</p>
                <button class="add-to-cart" data-id="3" data-name="Cupcake de Morango" data-price="7.00">Comprar</button>
            </div>
            <div class="cupcake-item">
                <img src="img/cupcake4.png" alt="Cupcake 4">
                <p>Cupcake de Red Velvet - R$ 08,00</p>
                <button class="add-to-cart" data-id="4" data-name="Cupcake de Red Velvet" data-price="8.00">Comprar</button>
            </div>
        </div>

        <div id="cart">
            <h3>Carrinho</h3>
            <ul id="cart-list"></ul>
            <p id="cart-total">Total: R$ 0,00</p>
            <button onclick="window.location.href='checkout.php'">Finalizar Compra</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Cupcake Store. Todos os direitos reservados.</p>
    </footer>

    <script src="cart.js"></script>
</body>
</html>
