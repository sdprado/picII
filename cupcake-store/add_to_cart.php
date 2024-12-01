<?php
session_start();

// Verifica se os dados foram enviados via POST
if (isset($_POST['id'], $_POST['name'], $_POST['price'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Verifica se o carrinho já foi iniciado na sessão
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Adiciona o produto ao carrinho
    $product = [
        'id' => $id,
        'name' => $name,
        'price' => $price
    ];

    // Adiciona o produto ao array de produtos no carrinho
    $_SESSION['cart'][] = $product;

    // Retorna sucesso
    echo 'Produto adicionado ao carrinho.';
}
?>
