<?php
require_once 'conexao.php';

if(isset($_POST['enviar'])){

    $opcao = $_POST ['opcao'];
    $nomecompleto = $_POST ['nomecompleto'];
    $nometitular = $_POST ['nometitular'];
    $cpfboleto = $_POST ['cpfboleto'];
    $enderecoboleto = $_POST ['enderecoboleto'];
    $numerocartao = $_POST ['numerocartao'];
    $validadecartao = $_POST ['validadecartao'];
    $cvvcartao = $_POST ['cvvcartao'];

 $sql = "INSERT INTO pagamento_tres (opcao, nome, nome_titular, cpf_boleto, endereco, numero_cartao, validade_cartao, cvv_cartao)
 VALUES ('$opcao', '$nomecompleto', '$nometitular', '$cpfboleto','$enderecoboleto', '$numerocartao', '$validadecartao', '$cvvcartao')";


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