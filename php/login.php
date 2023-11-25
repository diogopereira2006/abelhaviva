<?php

session_start();
include_once "conexao.php";

if(isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    $email = $_POST['email'];
    $senha= $_POST['senha'];


    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email' and senha = '$senha'";
    $result = $con->query($sql);
    
    $resultado = mysqli_fetch_array($result);
     $nome = $resultado[4];
     $sobrenome = $resultado[5];
     // var_dump($resultado);   
    $_SESSION['nome'] = $nome;
    $_SESSION['sobrenome'] = $sobrenome;
    
    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['email']);
        unset ($_SESSION['senha']);
        echo "<script>alert('Senha ou Email inccorretos')
        window.location.href = '../login.php'</script>";
        
    }else{  
        $_SESSION['email'] = $email;
        $_SESSION['status']='OK';
        header("location:../paginaposlogincolab.php");
       
    }
    
    
}

?>