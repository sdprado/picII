<?php
session_start();

// Verifica se o carrinho existe na sessão
if (isset($_SESSION['cart'])) {
    echo json_encode($_SESSION['cart']);
} else {
    echo json_encode([]);
}
?>
