<?php
   
   session_start();
    require_once "conexao.php";


    if(isset($_POST['enviar'])){
        $empresa = $_POST["empresa"];
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $senha = $_POST["senha"];
       
       



//insere os dados da empresa na tabela
$sql = "INSERT INTO inicio_login (nomeda_empresa ,email_institu ,nome_colab,sobrenome,senha) VALUES ('$empresa' ,'$email','$nome','$sobrenome' ,'$senha')";



$resultado = mysqli_query($con, $sql);
if ($resultado) {
    header("location:../login.php?status=ok");
}else{
    echo "Erro em cadastrar!". mysqli_connect_error();
}
$con->close();

}
?>