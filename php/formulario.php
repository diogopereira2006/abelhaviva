<?php
include_once "conexao.php";

if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $textarea = $_POST['textarea'];
    $data = $_POST['data'];
    $time = $_POST['time'];

    $sql = "INSERT INTO formulario (nome,sobre_nome,email,telefone,caixa_texto,data,horario)VALUES
    ('$nome','$sobrenome','$email','$telefone', '$textarea', '$data','$time' )";

$resultado = mysqli_query($con, $sql);
if ($resultado) {
   echo "<script>alert('enviado com sucesso !');
   window.location.href = '../inicio.php'</script>";
}else{
    echo "Erro em cadastrar!". mysqli_connect_error();
}
$con->close();

}



?>