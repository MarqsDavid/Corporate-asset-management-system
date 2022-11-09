<?php
    session_start();
    //print_r($_REQUEST)

use LDAP\Result;

    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['passwordAdmin']))
    {

        include_once('configAdmin.php');
        $username = $_POST['username'];
        $passwordAdmin = $_POST['passwordAdmin'];


       $sql = "SELECT * FROM administradores WHERE username = '$username' and passwordAdmin = '$passwordAdmin'";
       
       
       $result = $conexao->query($sql);
    


       if(mysqli_num_rows($result) < 1)
       {
        unset($_SESSION['username']);
        unset($_SESSION['passwordAdmin']);
        header('Location: ../login.php');
       }

       else
       {
        $_SESSION['username'] = $username;
        $_SESSION['senha'] = $passwordAdmin;
        header('Location: ../pages/gerenciadorUsuarios.php');
       }
    }

    else
    {
        header('Location: ../login.php');
    }
?>