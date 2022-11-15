<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['firstname'];
        $sobrenome = $_POST['lastname'];
        $email = $_POST['email'];
        $celular = $_POST['number'];
        $genero = $_POST['gender'];
        $senha = $_POST['password'];
        $confimeSenha = $_POST['confirmPassword'];
        $dataCriacao = $_POST['creation-date'];
        
        $sqlInsert = "UPDATE usuarios SET nome='$nome',sobrenome='$sobrenome',email='$email',celular='$celular',genero='$genero',senha='$senha',confimeSenha='$confimeSenha',dataCriacao='$dataCriacao'
        WHERE id=$id";
        
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../pages/gerenciadorUsuarios.php');

?>

