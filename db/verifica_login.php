<?php

require_once('conexao.php');

session_start();

$email = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM $banco.usuario WHERE email = '".$email."' AND senha = '".$senha."'";

$resultado = mysqli_query($con, $sql);

//retorna dados do banco
$dados = mysqli_fetch_array($resultado);

if(mysqli_num_rows($resultado) >0){
  $_SESSION['nome'] = $dado['nome'];
  $_SESSION['email'] = $dados['email'];
  $_SESSION['perfil'] = $dados['perfil_usuario_id'];
  header("location:../home.php");
}else{
  header("location:../index.php?erro=2");
}
?>