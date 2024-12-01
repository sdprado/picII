<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar - Cupcake Store</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Registrar-se</h1>
  </header>

  <main>
    <form action="register_action.php" method="POST">
      <label for="nome">Nome</label>
      <input type="text" name="nome" required>

      <label for="email">E-mail</label>
      <input type="email" name="email" required>

      <label for="senha">Senha</label>
      <input type="password" name="senha" required>

      <label for="cpf">CPF</label>
      <input type="text" name="cpf" required>

      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" required>

      <label for="numero">Número</label>
      <input type="text" name="numero" required>

      <label for="bairro">Bairro</label>
      <input type="text" name="bairro" required>

      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" required>

      <label for="cep">CEP</label>
      <input type="text" name="cep" required>

      <button type="submit">Cadastrar</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2024 Cupcake Store. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
