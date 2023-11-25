<?php
session_start();
require_once "conexao.php";

if(isset($_POST['enviar'])){

    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cadastro_empresa (nome_empresa,email_institu,senha) VALUES ('$empresa', '$email', '$senha')";

    $resultado = mysqli_query($con,$sql);
    if($resultado){
        header("location:../loginempresa.php");

    }else{
        echo "erro em cadastrar" .mysqli_connect_error();
    }
    $con -> close();
}



?>


