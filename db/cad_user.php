<?php

require_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$perfil = 2;

$sql = "INSERT INTO 
            usuario (nome, senha, email, perfil_usuario_id)
            VALUES ('$nome', '$senha','$email',$perfil)
      ";

$resultado = mysqli_query($con, $sql);


if($resultado == true){
      header("location: ../index.php");
}

?>