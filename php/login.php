<?php

if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once "conexao.php";
    $email = $_POST['email'];
    $senha= $_POST['senha'];

    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email' and senha = 'senha'";

    $result = $con->query($sql);



    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['email']);
        unset ($_SESSION['senha']);

        header('location:../login.php');
    }else{


        header('location:../login.php');
    }
}else{
    $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("location:../plaginaposlogin.php?status=ok");
}




?>