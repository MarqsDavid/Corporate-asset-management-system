<?php
    session_start();
    
    include_once('configPatrimonios.php');

    if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM tblpatrimonios WHERE id LIKE '%$data%' or descricao LIKE '%$data%' or numeroPatrimonio LIKE '%$data%'or numeroLocalizacao LIKE '%$data%' or responsavel LIKE '%$data%' or dataCriacao LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql= "SELECT * FROM  tblpatrimonios ORDER BY  id DESC";
    }

    $result = $conexao->query($sql);
?>
