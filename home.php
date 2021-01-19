<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['perfil'])){
   header('location:index.php?erro=1');
}

require_once('db/conexao.php');

$sql = "SELECT * FROM tarefas WHERE usuario_id = '".$_SESSION['id']."'";
$result_tarefa = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task</title>
</head>
<body>
  <a href="tarefa.php">Cadastrar Tarefa</a>
  <a href="">Listar Tarefas</a>
  <a href="db/sair.php">Sair</a><br><br>

<table border="1"> 
  <tr>
    <td>Título</td>
    <td>Data</td> 
    <td>Hora</td>
    <td>Descrição</td>
    <td>Categoria</td>
    <td>Opções</td>
  </tr>
<?php foreach ($result_tarefa as $key => $value) { ?>
  <tr>
      <td><?= $value['titulo'];?></td>
      <td><?= date("d/m/Y", strtotime($value['data'])); ?></td>
      <td><?= $value['hora'];?></td>
      <td><?= $value['descricao'];?></td>
      <td><a href="editar_tarefa.php?id=<?= $value['id'];?>">Editar</a></td>
    </tr>
<?php } ?>
  
</table>
</body>
</html>