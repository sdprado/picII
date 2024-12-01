<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Cupcake Store</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Login</h1>
  </header>

  <main>
    <form action="login_action.php" method="POST">
      <label for="email">E-mail</label>
      <input type="email" name="email" required>

      <label for="senha">Senha</label>
      <input type="password" name="senha" required>

      <button type="submit">Entrar</button>

      <p>Ainda não tem uma conta? <a href="register.php">Registrar-se</a></p>
    </form>
  </main>

  <footer>
    <p>&copy; 2024 Cupcake Store. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
