<?php

session_start();
 require_once "conexao.php";

 if(isset($_POST['enviar'])){
    $opcaopagamento = $_POST ["opcaopagamento"];
    $usuario = $_POST ["usuario"];
    $nometitular = $_POST ["nometitular"];
    $cpfboleto = $_POST ["cpfboleto"];
    $enderecoboleto = $_POST ["enderecoboleto"];
    $validadecartao = $_POST ["validadecartao"];
    $cvvcartao = $_POST ["cvvcartao"];
 }

 $sql = "INSERT INTO pagamento_dois (opcao_pagamento,nome_completo,nome_titular,cpf_boleto,endereco_boleto,validade_boleto,cvv_cartao) VALUES ('$opcaopagamento', '$usuario', '$nometitular','$cpfboleto', '$enderecoboleto', '$validadecartao', '$cvvcartao')";

$resultado = mysqli_query($con, $sql);
if ($resultado) {
   var_dump($resultado);
}else{
    echo "Erro em cadastrar!". mysqli_connect_error();
}
$con->close();

?>
