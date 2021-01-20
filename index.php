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
  <title>task</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

  <div id="login">
    <h3 class="text-center text-white pt-5">Task Login</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">

          <?php if (isset($_GET['erro'])) {
            if ($_GET['erro'] == 1) { ?>
              <div class="alert alert-danger text-center" role="alert">
                <?php echo $erro ?>
              </div>
            <?php } else if ($_GET['erro'] == 2) { ?>
              <div class="alert alert-danger text-center" role="alert">
                <?php echo $erro ?>
              </div>
            <?php } else if ($_GET['erro'] == 3) { ?>
              <div class="alert alert-success text-center" role="alert">
                <?php echo $erro ?>
              </div>
            <?php } ?>
          <?php } ?>

          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="db/verifica_login.php" method="post">
              <h3 class="text-center text-info">Task</h3>
              <div class="form-group">
                <label for="username" class="text-info">E-mail:</label><br>
                <input type="text" name="login" id="username" value="jonatta89@gmail.com" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Senha:</label><br>
                <input type="password" name="senha" value="123456" id="password" class="form-control">
              </div>
              <div class="form-group">
                <label for="remember-me" class="text-info"><span>Lembrar-me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
              </div>
              <div id="register-link" class="text-right">
                <a href="cadastro.php" class="text-info">Cadastre-se</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>