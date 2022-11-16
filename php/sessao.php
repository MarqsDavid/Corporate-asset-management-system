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

    $sql= "SELECT * FROM  tblpatrimonios ORDER BY  id DESC";

    $result = $conexao->query($sql);
?>
