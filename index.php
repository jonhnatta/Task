<?php

if (isset($_GET['erro'])){
  if($_GET['erro'] == 1);
  $erro = 'Login ou senha invalidos';
}else {
  $erro = "";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task</title>
</head>

<body>
  <form action="">
    <label for="login">Login</label><br>
    <input type="text" name="login"><br>
    <label for="senha">Senha</label><br>
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Enviar">
    <span><?php echo $erro; ?></span>
  </form>
</body>

</html>