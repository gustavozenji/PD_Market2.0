<?php
session_start();
unset ($_SESSION['email']);
unset ($_SESSION['senha']);
    header ('Location: login.php');
?>

<a href= "sair.php" class="btn btn-danger me-5">Sair</a>