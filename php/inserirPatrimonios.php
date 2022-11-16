<?php
   if(isset($_POST['submit']))
    {
         
       include_once('configPatrimonios.php');
       
       $marca = $_POST['mark'];
       $tipo = $_POST['types'];
       $modelo = $_POST['model'];
       $patrimonio = $_POST['patrimony'];
       $localizacao = $_POST['location'];
       $usuario = $_POST['user']; 
       $dataCriacao = $_POST['creation-date']; 
       
       
       $result = mysqli_query($conexao, "INSERT INTO tblpatrimonios(marca,tipo,modelo,patrimonio,localizacao,usuario,dataCriacao) VALUES
       ('$marca','$tipo','$modelo','$patrimonio','$localizacao','$usuario','$dataCriacao')");
      
      header('Location: ../pages/home.php');

    }
?>