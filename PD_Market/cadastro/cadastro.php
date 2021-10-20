<?php
if(isset($_POST['submit']))
{
 
 
  include_once('config.php');
  $email = $_POST['email'];
  $nome = $_POST['name'];
  $sobrenome = $_POST['lastname'];
  $senha = $_POST['password'];
  
 
$result = msqli_query($conexao, "INSERT INTO usuarios(email, nome, sobrenome, senha, ) VALUES ('$email','$nome',
'$sobrenome','$senha')");
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tela de Cadastro</title>
  <link rel="stylesheet" href="cadastro.css">
</head>
<body> <br><br><br>
  <div id="main-container">
    <h1>Cadastre-se para acessar o sistema</h1>
    <form id="register-form" action="cadastro.php" method='POST'>
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="15" data-email-validate>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
          <label for="lastname">Sobrenome</label>
          <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>
     
      <div class="full-box">
        <input id="submit" type="submit" value="Registrar">
      </div>
      <h3> Se já possui um cadastro faça login <a href="PD_Market/login/php/login.php" >aqui</a></h3>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="cadastro.js"></script>
</body>
</html>