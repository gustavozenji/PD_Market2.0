<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
include_once('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
 
        //Códigos para mostrar as informações
        print_r('Email: '. $email);
        print_r('<br>');
        print_r('Senha: '. $senha);
 
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
 
        $resultado = $conexao->query($sql);
 
        if(msqli_num_rows($resultado) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form de Registro com validações em JS</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body> <br><br><br>
  <div id="main-container">
    <h1>Cadastre-se para acessar o sistema</h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
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
        <input id="btn-submit" type="submit" value="Registrar">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>