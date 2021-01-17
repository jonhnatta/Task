<?php

if (isset($_GET['erro'])){
  if($_GET['erro'] == 1){
    $erro = 'Acesso Negado';
  }else if($_GET['erro'] == 2){
    $erro = 'Usuário ou Senha Inválido!';
  }else if($_GET['erro'] == 3){
    $erro = 'Logout efetuado com sucesso!';
  }
}else{
  $erro ="";
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
  <form action="db/verifica_login.php" method="POST">
  <span><?php echo $erro ?></span><br><br>
    <label for="login">Login</label><br>
    <input type="text" name="login" placeholder="Digite seu email para login"><br>
    <label for="senha">Senha</label><br>
    <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
    <input type="submit" value="Enviar">
  </form>
<br>
  <a href="cadastro.php">cadastrar</a>
</body>

</html>