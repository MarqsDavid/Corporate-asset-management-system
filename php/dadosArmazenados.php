<?php
    session_start();
    
    include_once('configAdmin.php');
    include_once('config.php');

    if((!isset($_SESSION['username']) == true) and (!isset ($_SESSION['passwordAdmin']) == true))
    {
        unset($_SESSION['username']);
        unset($_SESSION['passwordAdmin']);
        header('Location: ../login.php');
    }

    $sql= "SELECT * FROM  usuarios ORDER BY  id DESC";

    $result = $conexao->query($sql);
?>