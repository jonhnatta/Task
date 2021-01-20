
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

  <h1> Olá, <?= $_SESSION['nome'] ?>!</h1>

  <form action="">
    <input type="text" name="busca" placeholder="Digite para buscar">
    <button>Buscar</button>
  </form>
  <br>

  <table border="1">
    <tr>
      <?php if ($_SESSION['perfil'] == 1) { ?>
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
        <?php if ($_SESSION['perfil'] == 1) { ?>
          <td><?= $value['nome']; ?></td>
        <?php } ?>
        <td><?= $value['titulo']; ?></td>
        <td><?= date("d/m/Y", strtotime($value['data'])); ?></td>
        <td><?= $value['hora']; ?></td>
        <td><?= $value['descricao']; ?></td>
        <?php
        $id_tarefa = $value['categoria_id'];
        $sql = "SELECT * FROM categoria WHERE id = $id_tarefa";
        $result = mysqli_query($con, $sql);
        $cat_tarefa = mysqli_fetch_array($result);
        ?>
        <td><?= $cat_tarefa['nome']; ?></td>
        <td>
          <a href="editar_tarefa.php?id=<?= $value['idt']; ?>">Editar</a>
          <a href="db/excluir_tarefa.php?id=<?= $value['idt']; ?>">Excluir</a>
        </td>

      </tr>
    <?php } ?>


  </table>
</body>

</html>