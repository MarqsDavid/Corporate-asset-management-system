<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome'];
                $email = $user_data['email'];
                $celular = $user_data['celular'];
                $genero = $user_data['genero'];
               
                $senha = $user_data['senha'];
                $confimeSenha = $user_data['confimeSenha'];
                $dataCriacao = $user_data['dataCriacao'];
            }
        }
        else
        {
            header('Location: ../pages/gerenciadorUsuarios.php');
        }
    }
    else
    {
    
    }
?>
