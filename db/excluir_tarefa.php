<?php

require_once("conexao.php");

session_start();

$id = $_GET['id'];

$sql = "DELETE FROM tarefas WHERE id = $id";

$resultado = mysqli_query($con, $sql);

if($resultado == true){
      header("location: ../home.php");
}

?>