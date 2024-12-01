<?php
include('db.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

// Validação de campos vazios
if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($endereco) || empty($numero) || empty($bairro) || empty($cidade) || empty($cep)) {
    header("Location: register.php?erro=1");
    exit();
}

// Criação do usuário no banco
$sql = "INSERT INTO users (nome, email, senha, cpf, endereco, numero, bairro, cidade, cep) VALUES ('$nome', '$email', '$senha', '$cpf', '$endereco', '$numero', '$bairro', '$cidade', '$cep')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
