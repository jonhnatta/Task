<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task</title>
</head>
<body>
  <form action="db/cad_tarefa.php" method="POST">
    <label for="nome">Titulo</label>
    <input type="text" name="titulo"><br><br>
    <label>Descrição</label>
    <textarea name="descricao"></textarea><br><br>
    <input type="date" name="data"><br><br>
    <input type="datetime" name="hora"><br><br>
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