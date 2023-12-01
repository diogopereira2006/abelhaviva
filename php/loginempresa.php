<?php
session_start();
include_once "conexao.php";

if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro_empresa WHERE email_institu = '$email'  and senha = '$senha'";
    $result = $con->query($sql);

    $resultado = mysqli_fetch_array($result);
    $email = $resultado[2];
    $empresa = $resultado[1];

    $_SESSION['email'];
    $_SESSION['empresa'];
    //adicionar sessoes caso precisar//

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo"<script>alert('Senha ou Email incorretos')
        window.location.href = '../loginempresa.php'</script>";
    }else{
        $_SESSION['empresa'] = $empresa;
        $_SESSION['email'] = $email;
        header("location:../plaginaposlogin.php");
    }

}

?>