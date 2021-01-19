<?php

require_once("conexao.php");
session_start();

$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_user = $_SESSION['id'];

$sql = "INSERT INTO 
            tarefas (titulo, descricao, data, hora)
            VALUES ('$titulo', '$desc','$hora')
      ";

$resultado = mysqli_query($con, $sql);


if($resultado == true){
      header("location: ../index.php");
}

?>