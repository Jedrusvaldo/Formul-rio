<?php


   if(isset($_POST['submit']))
   {
    
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email:' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['cidade']);
    //print_r('<br>');
   // print_r('Endereço: ' . $_POST['endereço']);


   include_once('config.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['genero'];
   $data_nasc = $_POST['data_nascimento'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $endereco = $_POST['endereco'];

   $result = mysqli_query($conexao, "INSERT INTO usuários(nome,email,senha,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES ('$nome','$email','$senha','$telefone',' $sexo','$data_nasc','$cidade','$estado','$endereco')");

   header('Location: login.php');

   }

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <a href="home.php">Voltar</a>
  
  <div class="box">
    <form action="formulario.php" method="POST"> 
      <fieldset>
        <legend><b>Formulário de Clientes</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputuser" required>
          <label for="Nome" class="labelinput">Nome completo</label>            
        </div>
        <br><br>       
        <div class="inputBox">
          <input type="email" name="email" id="email" class="inputuser" required>
          <label for="email" class="labelinput">Email</label>            
        </div>
        <br><br>
        <div class="inputBox">
          <input type="password" name="senha" id="senha" class="inputuser" required>
          <label for="senha" class="labelinput">Senha</label>            
        </div>
        <br><br>
        <div class="inputBox">
          <input type="telefone" name="telefone" id="telefone" class="inputuser" required>
          <label for="telefone" class="labelinput">Telefone</label>            
        </div>
        <br>
        <div id="sexo">
          <p>Sexo:</p>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <label for="feminino">Feminino</label>
  
          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <label for="masculino">Masculino</label>
  
          <input type="radio" id="outro" name="genero" value="outro" required>
          <label for="outro">Outro</label>
        </div>
        <br>          
          <label for="data_nascimento"><b>Data de nascimento:</b></label>            
          <input type="date" name="data_nascimento" id="data_nascimento" >     
          <br><br><br>
        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputuser" required>
          <label for="cidade" class="labelinput">Cidade</label>            
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputuser" required>
          <label for="estado" class="labelinput">Estado</label>            
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereço" class="inputuser" required>
          <label for="endereco" class="labelinput">Endereço</label>            
        </div>
        <br><br>

        <input type="submit" name="submit" id="submit">
        
      </fieldset>
    </form>
  </div>
  
</body>
</html>