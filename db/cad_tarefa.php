<?php

require_once("conexao.php");

session_start();

$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_user = $_SESSION['id'];
$categoria = $_POST['categoria'];



$sql = "INSERT INTO 
            tarefas (titulo, descricao, data, hora, usuario_id, categoria_id)
            VALUES ('$titulo', '$desc','$data','$hora', $id_user, $categoria )
      ";

$resultado = mysqli_query($con, $sql);


echo $id_user;

if($resultado == true){
      header("location: ../home.php");
}

?>