<?php

require_once('db/bloqueio.php');
require_once('header.php');
require_once('db/conexao.php');

$id = $_SESSION['id'];

if (isset($_GET['busca'])) {
  $busca = $_GET['busca'];
} else {
  $busca = '';
}

if ($_SESSION['perfil'] != 1) {
  $sql = "SELECT *,t.id as idt FROM tarefas t WHERE usuario_id = $id AND (titulo LIKE '%$busca%' OR descricao LIKE '%$busca%') ORDER BY data, hora asc";
} else {
  $sql = "SELECT *, u.id as idu, t.id as idt FROM tarefas t, usuario u WHERE t.usuario_id = u.id AND (titulo LIKE '%$busca%' OR descricao LIKE '%$busca%') ORDER BY data, hora asc";
}

$result_tarefa = mysqli_query($con, $sql);

?>

<main class="container">
  <form action="" class="row">
  <div class="input-field col s1">
      <a href="tarefa.php" class="btn-floating"><i class="material-icons">add</i></a>
    </div>
    <div class="input-field col s10">
      <input type="text" name="busca" id="busca">
      <label for="busca">Digite para buscar</label>
    </div>
    <div class="input-field col s1">
      <button class="btn"><i class="material-icons">search</i></button>
    </div>
   

  </form>

  <table class="responsive-table highlight">
    <thead class="teal lighten-4">
      <tr>
        <?php if ($_SESSION['perfil'] == 1) { ?>
          <th>Usuário</th>
        <?php } ?>
        <th>Título</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Opções</th>
      </tr>
    </thead>
    
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
          <a href="editar_tarefa.php?id=<?= $value['idt']; ?>"><i class="material-icons">edit</i></a>
          <a href="db/excluir_tarefa.php?id=<?= $value['idt']; ?>"><i class="material-icons red-text">delete</i></a>
        </td>

      </tr>
     
    <?php } ?>

  </table>

</main>
</body>

</html>