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
    <title>Carrinho - Cupcake Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <ul id="cart-list">
        <?php
        // Exibe o carrinho caso tenha itens
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
            $total = 0;
            foreach ($_SESSION['cart'] as $item):
                $total += $item['price'] * $item['quantity'];
        ?>
                <li><?php echo $item['name']; ?> - R$ <?php echo number_format($item['price'], 2, ',', '.'); ?> x <?php echo $item['quantity']; ?></li>
        <?php
            endforeach;
        else:
        ?>
            <li>O carrinho está vazio.</li>
        <?php endif; ?>
    </ul>
    <p id="cart-total">Total: R$ <?php echo isset($total) ? number_format($total, 2, ',', '.') : '0,00'; ?></p>
    
    <a href="checkout.php" class="checkout-button">Finalizar Compra</a>

    <script src="cart.js"></script>
</body>
</html>
