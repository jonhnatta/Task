<?php

require_once('bloqueio.php');

require_once("conexao.php");


$id = $_GET['id'];

$sql = "DELETE FROM tarefas WHERE id = $id";

$resultado = mysqli_query($con, $sql);

if($resultado == true){
      header("location: ../home.php");
}

?>