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
                $senha = $user_data['sobrenome'];
                $email = $user_data['email'];
                $telefone = $user_data['celular'];
                $sexo = $user_data['genero'];
                $data_nasc = $user_data['tipoUsuario'];
                $cidade = $user_data['senha'];
                $estado = $user_data['estado'];
                $endereco = $user_data['dataCriacao'];
            }
        }
        else
        {
            header('Location: ../pages/gerenciadorUsuarios.php');
        }
    }
    else
    {
        header('Location: ../pages/gerenciadorUsuarios.php');
    }
?>
