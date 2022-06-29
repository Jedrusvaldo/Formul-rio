<?php
include_once('config.php');
 
   if(!empty($_GET['id']))
   {

    $id= $_GET['id'];
    $sqlSelect = "SELECT * FROM usuários WHERE id=$id";
    $result = $conexao ->query($sqlSelect);
    if($result->num_rows >0)
    {

      while($user_data = mysqli_fetch_assoc($result))
      {
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nascimento'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $endereco = $user_data['endereco'];
      }
    }
    else{
      header('Location: sistema.php');
    }
   }

   else
   {
    header('Location: sistema.php');
   }

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputuser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputuser:focus ~ .labelinput,
        .inputuser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #update{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
  <a href="sistema.php">Voltar</a>
  
  <div class="box">
    <form action="saveEdit.php" method="POST"> 
      <fieldset>
        <legend><b>Formulário de Clientes</b></legend>
        <br>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputuser" value=<?php echo $nome;?> required>
          <label for="Nome" class="labelinput">Nome completo</label>            
        </div>
        <br><br>       
        <div class="inputBox">
          <input type="email" name="email" id="email" class="inputuser" value=<?php echo $email;?> required>
          <label for="email" class="labelinput">Email</label>            
        </div>
        <br><br>
        <div class="inputBox">
          <input type="text" name="senha" id="senha" class="inputuser" value=<?php echo $senha;?> required>
          <label for="senha" class="labelinput">Senha</label>            
        </div>
        <br><br>
        <div class="inputBox">
          <input type="telefone" name="telefone" id="telefone" class="inputuser" value=<?php echo $telefone;?> required>
          <label for="telefone" class="labelinput">Telefone</label>            
        </div>
        <br>
        <div id="sexo">
          <p>Sexo:</p>
          <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ''?> required>
          <label for="feminino">Feminino</label>
  
          <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ''?> required>
          <label for="masculino">Masculino</label>
  
          <input type="radio" id="outro" name="sexo" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : ''?> required>
          <label for="outro">Outro</label>
        </div>
        <br>          
          <label for="data_nascimento"><b>Data de nascimento:</b></label>            
          <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>     
          <br><br><br>
        <div class="inputBox">
          <input type="text" name="cidade" id="cidade" class="inputuser" value=<?php echo $cidade;?> required>
          <label for="cidade" class="labelinput">Cidade</label>            
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="estado" id="estado" class="inputuser" value=<?php echo $estado;?> required>
          <label for="estado" class="labelinput">Estado</label>            
        </div>
        <br><br>

        <div class="inputBox">
          <input type="text" name="endereco" id="endereço" class="inputuser"  value=<?php echo $estado;?> required>
          <label for="endereco" class="labelinput">Endereço</label>            
        </div>
        <br><br>
        <input type="hidden" name="id" value=<?php echo $id;?>>
        <input type="submit" name="update" id="update">
        
      </fieldset>
    </form>
  </div>
  
</body>
</html>