<?php 

   $hostname = "localhost";
   $bancodedados = "BANCODETEXTO";
   $usuario = "root";
   $senha = "";

   $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados); 
   $mysqli -> set_charset("utf8");
   if($mysqli->connect_errno) {
       echo "Falha ao Conectar: (" . $mysqli->connect_errno . ")" . $mysqli ->connect_error;
   }
?>
