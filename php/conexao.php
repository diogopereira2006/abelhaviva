<?php
    $servidor = "localhost";
    $usuario = "root";
    //xampp nao usa senha
    $senha = "Diogo543210";
    $base = "empresa_login";

    try{
    $con = mysqli_connect($servidor, $usuario, $senha, $base);
    
    }
    catch(Exception $e){
        echo "Erro ao conectar: ".$e->getMessage();
    }

?>