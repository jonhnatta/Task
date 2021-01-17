<?php

if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
  header('location:index.php?erro=1');
}

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
  <a href="">Sair</a><br><br>
<table border="1"> 
  <tr>
    <td>Título</td>
    <td>Data</td>
    <td>Hora</td>
    <td>Descrição</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>