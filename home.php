<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['perfil'])){
   header('location:index.php?erro=1');
}

require_once('db/conexao.php');

$id = $_SESSION['id'];

if ($_SESSION['perfil'] != 1){
  $sql = "SELECT *,t.id as idt FROM tarefas t WHERE usuario_id = $id ORDER BY data, hora asc";
}else{
  $sql = "SELECT *, u.id as idu, t.id as idt FROM tarefas t, usuario u WHERE t.usuario_id = u.id ORDER BY data, hora asc";
}

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
  <a href="home.php">Listar Tarefas</a>
  <a href="db/sair.php">Sair</a><br><br>

<h1> Olá, seja bem vindo(a) <?= $_SESSION['nome'] ?>!</h1>

<table border="1"> 
  <tr>
  <?php if($_SESSION['perfil'] == 1) { ?>
    <td>Usuário</td>
  <?php } ?>
    <td>Título</td>
    <td>Data</td> 
    <td>Hora</td>
    <td>Descrição</td>
    <td>Categoria</td>
    <td>Opções</td>
  </tr>
<?php foreach ($result_tarefa as $value) { ?>
  <tr>
      <?php if($_SESSION['perfil'] == 1) { ?>
        <td><?= $value['nome'];?></td>
      <?php } ?>
      <td><?= $value['titulo'];?></td>
      <td><?= date("d/m/Y", strtotime($value['data'])); ?></td>
      <td><?= $value['hora'];?></td>
      <td><?= $value['descricao'];?></td>
      <?php 
        $id_tarefa = $value['categoria_id'];
        $sql = "SELECT * FROM categoria WHERE id = $id_tarefa";
        $result = mysqli_query($con, $sql);
        $cat_tarefa = mysqli_fetch_array($result);
      ?>
      <td><?= $cat_tarefa['nome'];?></td>
      <td>
        <a href="editar_tarefa.php?id=<?= $value['idt'];?>">Editar</a>
        <a href="db/excluir_tarefa.php?id=<?= $value['idt'];?>">Excluir</a>
      </td>
      
    </tr>
<?php } ?>


</table>
</body>
</html>