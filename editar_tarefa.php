<?php 

require_once('db/conexao.php');

$sql = "SELECT * FROM categoria";
$result_cat = mysqli_query($con, $sql);

$id = $_GET['id'];

$sql2 = "SELECT * FROM tarefas WHERE id= $id";
$result_tarefa = mysqli_query($con, $sql2);

$tarefa = mysqli_fetch_array($result_tarefa);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task</title>
</head>
<body>
<body>
  <a href="tarefa.php">Cadastrar Tarefa</a>
  <a href="home.php">Listar Tarefas</a>
  <a href="db/sair.php">Sair</a><br><br>

  <form action="db/salvar_tarefa_editada.php?id=<?= $id;?>" method="POST">
    <label>Titulo</label>
    <input type="text" name="titulo" value="<?= $tarefa['titulo'];?>"><br><br>
    <label>Descrição</label><br>
    <textarea name="descricao"><?= $tarefa['descricao'];?></textarea><br><br>
    <select name="categoria">
      <?php foreach ($result_cat as $key => $value) { ?>
        
        <option value="<?php echo $value['id'] ?>"
        
        <?php 
          if ($value['id'] == $tarefa['categoria_id']){
            echo "selected";
          }

        ?>

        ><?php echo $value['nome'] ?></option>

      <?php } ?>
    </select><br><br>
    <input type="date" name="data" value="<?= $tarefa['data'];?>"><br><br>
    <input type="time" name="hora" value="<?= $tarefa['hora'];?>"><br><br>
   <input type="submit" value="Editar">
  </form>

</body>
</html>