<?php
session_start();
require_once "conexao.php";

if(isset($_POST['enviar'])){
    $opcaopagamento = $_POST ["opcaopagamento"];
    $nomes = $_POST ["nomes"];
    $nometitular = $_POST ["nometitular"];
    $cpfboleto = $_POST ["cpfboleto"];
    $enderecoboleto = $_POST ["enderecoboleto"];
    $numerocartao = $_POST ["numerocartao"];
    $validadecartao = $_POST ["validadecartao"];
    $cvvcartao = $_POST ["cvvcartao"];


$sql = "INSERT INTO pagamentos (opcao, nome_completo, nome_titular,numero_cartao, cpf,validade_cartao,cvv_cartao, endereco) VALUES ('$opcaopagamento', '$nomes', '$nometitular', '$numerocartao', '$cpfboleto','$validadecartao','$cvvcartao', '$enderecoboleto')";

$resultado = mysqli_query($con, $sql);
if ($resultado) {
    header('location:../cadastro.php');
    echo "pagado com sucesso!, obrigado por ce juntar a beealive.";
}else{
    echo "Erro em cadastrar!". mysqli_connect_error();
}
$con->close();

}
?>