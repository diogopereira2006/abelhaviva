<?php

$conexao = "local";

if($conexao == "local"){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "Diogo543210";
    $base = "beealive";


}
else{
    if($conexao == "online"){
        $servidor = "107.161.183.203";
        $usuario = "terceirods_beealive";
        $senha = "beealive543210";
        $base = "terceirods_beealive";
    }
    
}

   
    try{
    $con = mysqli_connect($servidor, $usuario, $senha, $base);
    
    }
    catch(Exception $e){
        echo "Erro ao conectar: ".$e->getMessage();
    }

?>