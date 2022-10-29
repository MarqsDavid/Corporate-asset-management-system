<?php
    $dbHost = 'Localhost';
    $dbUsernmae = 'root';
    $dbName = 'formulario_usuarios';

    $conexao = new mysqli($dbHost,$dbUsernmae,"",$dbName);


 if($conexao->connect_errno)
  {
     echo "Erro";
  }

   else
   {
    header('Location: ../pages/formularioUsuarios.php');
   }
?>

