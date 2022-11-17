<?php
   if(isset($_POST['submit']))
    {
         
       include_once('configPatrimonios.php');
       
       $descricao = $_POST['description']; 
       $numeroPatrimonio = $_POST['patrimony'];
       $numeroLocalizacao = $_POST['location'];
       $responsavel = $_POST['user']; 
       $dataCriacao = $_POST['creation-date']; 
       
       
       $result = mysqli_query($conexao, "INSERT INTO tblpatrimonios(descricao,numeroPatrimonio,numeroLocalizacao,responsavel,dataCriacao) VALUES
       ('$descricao','$numeroPatrimonio','$numeroLocalizacao','$responsavel','$dataCriacao')");
      
      header('Location: ../pages/home.php');

    }
?>