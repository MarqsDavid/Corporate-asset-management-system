<?php

    if(!empty($_GET['id']))
    {
        include_once('configPatrimonios.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM tblpatrimonios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tblpatrimonios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: ../pages/home.php');
   
?>