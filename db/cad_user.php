<?php
require_once('bloqueio.php');

require_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$senha2 = md5($_POST['senha2']);
$perfil = 2;

if ($senha != $senha2) {
      header("location: ../cadastro.php?erro=1");
}else {
$sql = "INSERT INTO 
            usuario (nome, senha, email, perfil_usuario_id)
            VALUES ('$nome', '$senha','$email',$perfil)
      ";
}

$resultado = mysqli_query($con, $sql);


if($resultado == true){
      header("location: ../index.php");
}

?>