<?php

require_once "conexao.php";

if(isset($_POST['enviar'])){
    $opcaopagamento = $_POST ["opcaopagamento"];
    $nomes = $_POST ["nomes"];
    $cpfboleto = $_POST ["cpfboleto"];
    $enderecoboleto = $_POST ["enderecoboleto"];



$sql = "INSERT INTO pagamentos (opcao, nome_completo, cpf, endereco) VALUES ('$opcaopagamento', '$nomes', '$cpfboleto', '$enderecoboleto')";

$resultado = mysqli_query($con, $sql);
if ($resultado) {
    echo "pagado com sucesso!, obrigado por ce juntar a beealive.";
}else{
    echo "Erro em cadastrar!". mysqli_connect_error();
}
$con->close();

}
?>