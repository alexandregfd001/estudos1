<?php
session_start();
include = ("login.php");
$nome =  mysqli_real_scape_string($conexao, $_POST['name']);
$usuario = mysqli_real_scape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_scape_string($conexao, $_POST['senha']);

?>