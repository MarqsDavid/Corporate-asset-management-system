<?php
   if(isset($_POST['firstname']))
    {
         
       include_once('config.php');
       
       $nome = $_POST['firstname'];
       $sobrenome = $_POST['lastname'];
       $email = $_POST['email'];
       $celular = $_POST['number'];
       $genero = $_POST['gender'];
       $senha = $_POST['password']; 
       $confimeSenha = $_POST['confirmPassword']; 
       $dataCriacao = $_POST['creation-date'];
       
       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,celular,genero,senha,confimeSenha,dataCriacao) VALUES
       ('$nome','$sobrenome','$email','$celular','$genero','$senha','$confimeSenha','$dataCriacao')");

      header('Location: ../pages/formularioUsuarios.php');
    }
?>