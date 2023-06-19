<?php
   $servidor = "localhost";
   $usuario = "root";
   $senha = "";
   $bdd = "c_de_usuarios";

   $conexao = mysqli_connect($servidor, $usuario, $senha, $bdd);
   if(!$conexao) {
      die("Houve um erro: ".mysqli_connect_error());
   } 

?>

    