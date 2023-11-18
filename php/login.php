<?php
 session_start();
if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once "conexao.php";
    $email = $_POST['email'];
    $senha= $_POST['senha'];

    $sql = "INSERT INTO pos_login (email, senha) VALUES ('$email', '$senha')";
    $result = $con->query($sql);



    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['email']);
        unset ($_SESSION['senha']);

        header('location:../login.php');
        echo "Senha ou Email incorretos";
    }else{


        header('location:../login.php');
    }
}else{
       $_SESSION['email_institu'] = $email;
        $_SESSION['senha'] = $senha;
        header("location:../plaginaposlogin.php?status=ok");
}




?>