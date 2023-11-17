<?php
include_once "conexao.php";


if(isset($_POST['enviar'])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
}

$sql = "INSERT INTO login_colaborador (email, senha) VALUES ('$email','$senha')";

$resultado = mysqli_query($con, $sql);
if ($resultado){
    echo "logado com sucesso.";
    header("location:../plaginaposlogin.php?status=ok");
 
}else{
    echo "erro para conectar" .mysqli_connect_error();
}
$con->close();

?>