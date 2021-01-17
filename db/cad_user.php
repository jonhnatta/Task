<?php

require_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$perfil = 2;

$sql = "INSERT INTO 
            usuario (nome, email, senha, perfil)
            VALUES ($nome, $email,$senha,$perfil)
      "
?>