<?php

require_once('bloqueio.php');

require_once("conexao.php");

$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_tarefa = $_GET['id'];
$categoria = $_POST['categoria'];



$sql = "UPDATE tarefas SET 
            titulo = '$titulo',
            descricao = '$desc', 
            data = '$data',
            hora = '$hora',
            categoria_id = $categoria
            WHERE
            id = $id_tarefa
        ";

$resultado = mysqli_query($con, $sql);

if($resultado == true){
      header("location: ../home.php");
}

?>