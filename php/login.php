<?php

session_start();
include_once "conexao.php";

if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    $email = $_POST['email'];
    $senha= $_POST['senha'];

    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email' and senha = '$senha'";
    $result = $con->query($sql);

    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['email']);
        unset ($_SESSION['senha']);
        header("location:../login.php");
        echo "Senha ou Email inccorretos";
        
    }else{
        header("location:../plaginaposlogin.php");
        $_SESSION['email'];
    }
    $logado = $_SESSION['email'];
    
}

?>