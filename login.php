<!DOCTYPE html>
<html lang="PT-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela Login</title>
  <link rel="stylesheet" href="./style.css">
  <style>
    #voltar{
      text-decoration:none;
      color:#ffff;
      font-size:25px;
    }
  </style>
</head>
<body id="login">
<a id="voltar" href="home.php">Voltar</a>
  <div class="Login">
    <h1>Login</h1>
    <form action="testLogin.php" method="POST">
      <input id="sn" type="text" name="email" placeholder="Email">
      <br><br>
      <input id="sn" type="password" name="senha" placeholder="Senha">
      <br><br>
      <a href="DESTINO/index.html">
        <input class="input" type="submit" name="submit" value="Enviar">
      </a>
    </form>
  </div>
  
</body>
</html> 