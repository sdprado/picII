<?php
session_start();
include('db.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar se o usuário existe no banco
$sql = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['user'] = mysqli_fetch_assoc($result);
    header("Location: menu.php");
} else {
    header("Location: login.php?erro=1");
}
?>
