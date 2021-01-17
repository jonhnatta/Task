<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['perfil'])){
   header('location:index.php?erro=1');
}

require_once('db/conexao.php');

$email = $_SESSION['email'];

$sql = "SELECT * FROM usuario WHERE email= '".$email."'";

$resultado = mysqli_query($con, $sql);

$dados = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task</title>
</head>
<body>
  <a href="">Cadastrar Tarefa</a>
  <a href="">Listar Tarefas</a>
  <a href="db/sair.php">Sair</a><br><br>

<h1> Olá <?php echo $dados['nome']; ?>, seja bem vindo(a)!</h1>

<table border="1"> 
  <tr>
    <td>Título</td>
    <td>Data</td> 
    <td>Hora</td>
    <td>Descrição</td>
  </tr>
  <tr>
    <td><?php  ?></td>
    <td><?php ?></td>
    <td><?php ?></td>
    <td><?php ?></td>
  </tr>
</table>
</body>
</html>