<?php

if (isset($_GET['erro'])) {
  if ($_GET['erro'] == 1) {
    $erro = 'As senhas digitadas não conferem';
  }
}

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<section class="section section-login">
  <div class="valign-wrapper row login-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
      <form action="db/cad_user.php" method="POST">
        <div class="card-content">

          <?php if (isset($_GET['erro'])) {
            if ($_GET['erro'] == 1) { ?>
              <span id="error" class="red"><?= $erro; ?></span>
            <?php }  ?>
          <?php }  ?>


          <h3 class="teal-text">Cadastro Usuário</h3>
          <div class="row">

            <div class="input-field col s12">
              <label for="nome">Nome</label>
              <input type="text" name="nome">
            </div>

            <div class="input-field col s12">
              <label for="email">E-mail</label>
              <input type="text" name="email">
            </div>

            <div class="input-field col s12">
              <label for="senha">Senha</label>
              <input type="password" name="senha" id="senha1" onkeyup="validaSenha()">
            </div>

            <div class="input-field col s12">
              <label for="senha">Confirma Senha</label>
              <input type="password" name="senha2" id="senha2" onkeyup="validaSenha()">
            </div>
          </div>

        </div>
        <div class="card-action right-align">
          <a href="cadastro.php" class="btn red">Cancelar</a>
          <input type="submit" class="btn" value="Cadastrar">
        </div>
      </form>
    </div>
  </div>
</section>


<script>
  function validaSenha() {
    var senha = document.getElementById("senha1").value
    var senha2 = document.getElementById("senha2").value


    if (senha != senha2) {

      document.getElementById("senha2").style.border = "red 2px solid";

    } else {

      document.getElementById("senha2").style.border = "green 2px solid";

    }
  }
</script>
</body>

</html>