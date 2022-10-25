<?php
   if(isset($_POST['firstname']))
    {
         
       include_once('config.php');
       
       $nome = $_POST['firstname'];
       $sobrenome = $_POST['lastname'];
       $email = $_POST['email'];
       $celular = $_POST['number'];
       $genero = $_POST['gender'];
       $tipoUsuario = $_POST['usu-taype'];
       $senha = $_POST['password']; 
       $confimeSenha = $_POST['confirmPassword']; 

       $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,celular,genero,tipoUsuario,senha,confimeSenha) VALUES
       ('$nome','$sobrenome','$email','$celular','$genero','$tipoUsuario','$senha','$confimeSenha')");

    }
?>