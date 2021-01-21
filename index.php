<?php

if (isset($_GET['erro'])) {
  if ($_GET['erro'] == 1) {
    $erro = 'Acesso Negado';
  } else if ($_GET['erro'] == 2) {
    $erro = 'Usuário ou Senha Inválido!';
  } else if ($_GET['erro'] == 3) {
    $erro = 'Logout efetuado com sucesso!';
  }
} else {
  $erro = "";
}
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
      <form action="db/verifica_login.php" method="POST">
        <div class="card-content">

          <?php if (isset($_GET['erro'])) {
            if ($_GET['erro'] == 1) { ?>
              <span id="error" class="red"><?= $erro; ?></span>

            <?php } else if ($_GET['erro'] == 2) { ?>
              <span id="error" class="red"><?= $erro; ?></span>
            <?php } else if ($_GET['erro'] == 3) { ?>
              <span id="error" class="teal"><?= $erro; ?></span>
            <?php } ?>
          <?php }  ?>

          <h3 class="teal-text">Login</h3>
          <div class="row">

            <div class="input-field col s12">
              <label for="login">E-mail</label>
              <input type="text" name="login" value="jonatta89@gmail.com">
            </div>

            <div class="input-field col s12">
              <label for="senha">Senha </label>
              <input type="password" name="senha" value="123456">
            </div>
          </div>

        </div>
        <div class="card-action right-align">
          <a href="cadastro.php" class="btn-flat grey-text waves-effect">Cadastre-se</a>
          <input type="submit" class="btn" value="Entrar">
        </div>
      </form>
    </div>
  </div>
</section>

</body>

</html>