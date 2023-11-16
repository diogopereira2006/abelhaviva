<?php
   
    require_once "conexao.php";
    if(isset($_POST['enviar'])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $plano = $_POST["plano"];
        $senha = $_POST["senha"];
        $senhac = md5($senha);
        $pagamento = $_POST["pagamento"];

//conectando com o banco de dados


//insere os dados da empresa na tabela "empresa"
$sql = "INSERT INTO empresa (nome_empresa ,email_empresarial ,plano ,senha , pagamento) VALUES ('$nome' ,'$email' ,'$plano' ,'$senhac' , '$pagamento')";



$resultado = mysqli_query($con, $sql);

if ($resultado) {
    header("location:../cadastro.php?status=ok");
}else{
    echo "Erro ao cadastrar !". mysqli_connect_error();
}
$con->close();

}
?>