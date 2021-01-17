<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task</title>
</head>
<body>
  <form action="" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome"><br>
    <label for="">Email</label>
    <input type="email" name="email"><br>
    <label for="">senha</label>
    <input type="password" name="senha" id="senha1" onkeyup="validaSenha()"><br>
    <label for="">Confirma Senha</label>
    <input type="password" name="senha2" id="senha2" onkeyup="validaSenha()"><br><br>
    <input type="submit" value="Cadastrar">
  
  </form>

  <script>
  
  function validaSenha(){
     var senha = document.getElementById("senha1").value
     var senha2 = document.getElementById("senha2").value
     
     if (senha != senha2){
     
      document.getElementById("senha2").style.border="red 2px solid";
     }else {
      document.getElementById("senha2").style.border="green 2px solid";
     }
   
    
  }

  s</script>
</body>
</html>