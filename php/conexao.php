<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "Diogo543210";
    $base = "login_inicio";
    try{
    $con = mysqli_connect($servidor, $usuario, $senha, $base);
    
    }
    catch(Exception $e){
        echo "Erro ao conectar: ".$e->getMessage();
    }

?>