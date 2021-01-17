<?php


$servidor = "localhost";
$senha = "";
$usuario = "root";
$banco = "task";


$con = mysqli_connect($servidor, $usuario, $senha, $banco);

if (mysqli_errno($con)){
  echo "erro ao conectar no banco";
}
mysqli_select_db($con, $banco);

?>
