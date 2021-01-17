<?php

require_once("conexao.php");


$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$data = $_POST['data'];
$hora = $_POST['hora'];

$sql = "INSERT INTO 
            tarefas (titulo, descricao, hora)
            VALUES ('$titulo', '$desc','$hora')
      ";

$resultado = mysqli_query($con, $sql);


if($resultado == true){
      header("location: ../index.php");
}

?>