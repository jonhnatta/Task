<?php

require_once('db/bloqueio.php');

require_once('db/conexao.php');

$sql = "SELECT * FROM categoria";
$result_cat = mysqli_query($con, $sql);

require_once('header.php');

?>

<main class="container">

  <form class="row" action="db/cad_tarefa.php" method="POST">
    <div class="col offset-m3 s12">
      <h3 class="teal-text">Cadastrar Tarefa</h3>
    </div>

    <div class="input-field col m6 offset-m3 s12">
      <input type="text" name="titulo">
      <label for="titulo">Titulo</label>
    </div>

    <div class="input-field col m6 offset-m3 s12">
      <textarea style="height: 200px;" name="descricao"></textarea>
      <label for="descricao">Descrição</label>
    </div>

    <div class="input-field col m6 offset-m3 s12">
      <select name="categoria">
        <?php foreach ($result_cat as $key => $value) { ?>

          <option value="<?php echo $value['id'] ?>"><?php echo $value['nome'] ?></option>

        <?php } ?>
      </select>
    </div>
    <div class="input-field col m2 offset-m3 s12">
      <input type="date" name="data">
    </div>
    <div class="input-field col m1 s12">
      <input type="time" name="hora">
    </div>
    <div class="input-field col m6 offset-m3 s12">
    <a href="home.php" class="btn red">Cancelar</a>
      <input class="btn" type="submit" value="Cadastrar">
      
    </div>
      </form>

</main>

</body>

</html>