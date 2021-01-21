<?php 

require_once('db/bloqueio.php');

require_once('header.php');

require_once('db/conexao.php');

$sql = "SELECT * FROM categoria";
$result_cat = mysqli_query($con, $sql);

$id = $_GET['id'];

$sql2 = "SELECT * FROM tarefas WHERE id= $id";
$result_tarefa = mysqli_query($con, $sql2);

$tarefa = mysqli_fetch_array($result_tarefa);

?>

<main class="container">

  <form class="row" action="db/salvar_tarefa_editada.php?id=<?= $id;?>" method="POST">
  
  <div class="col offset-m3 s12">
      <h3 class="teal-text">Editar Tarefa</h3>
    </div>

    <div class="input-field col m6 offset-m3 s12">
    <input type="text" name="titulo" value="<?= $tarefa['titulo'];?>">
    <label for="titulo">Titulo</label>
    </div>
    
    <div class="input-field col m6 offset-m3 s12">
    <textarea style="height: 200px;" name="descricao"><?= $tarefa['descricao'];?></textarea>
    <label for="descricao">Descrição</label>
    </div>
    
    <div class="input-field col m6 offset-m3 s12">
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
    </select>
    </div>
    <div class="input-field col m2 offset-m3 s12">
    <input type="date" name="data" value="<?= $tarefa['data'];?>">
    </div>
    <div class="input-field col m1 s12">
    <input type="time" name="hora" value="<?= $tarefa['hora'];?>">
    </div>
    <div class="input-field col m6 offset-m3 s12">
    <a href="home.php" class="btn red">Cancelar</a>
   <input class="btn" type="submit" value="Alterar">
   
    </div>
  </form>

</main>

</body>
</html>