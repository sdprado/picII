<?php
$servername = "localhost";
$username = "root"; // ou seu usuário do MySQL
$password = ""; // ou sua senha do MySQL
$dbname = "cupcake_store";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
