<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>
</head>

<body>

  <nav>
    <div class="nav-wrapper teal">
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="home.php" class="brand-logo">Task Manager</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li> <a> Olá, <?= $_SESSION['nome'] ?>!</a></li>
        <li><a href="tarefa.php">Cadastrar Tarefa</a></li>
        <li><a href="home.php">Listar Tarefas</a></li>
        <li><a href="db/sair.php">Sair</a></li>
      </ul>
    </div>
  </nav>

  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <a href="#name"><span class="white-text name"><a> Olá, <?= $_SESSION['nome'] ?>!</a></span></a>
      </div>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a href="tarefa.php"><i class="material-icons">add</i> Tarefa</a></li>
    <li><a href="home.php"> <i class="material-icons">list</i>Listar Tarefas</a></li>
    <li><a href="db/sair.php"> <i class="material-icons">exit_to_app</i>Sair</a></li>
  </ul>