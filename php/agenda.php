<?php
session_start();
require_once "conexao.php";


if(isset($_POST['enviar'])){

    $data = $_POST["data"];
    $evento = $_POST["evento"];


    $sql = "SELECT * FROM eventos WHERE data_evento = '$data' and descricao_evento = '$evento'";
    

    $result = $con->query($sql);

$resultado = mysqli_fetch_array($result);
$data = $resultado[1];
$evento = $resultado[2];

$_SESSION['data'] = $data;
$_SESSION['evento'] = $evento;
if ($resultado) {
    echo "<script>alert('adicionado com sucesso !');
        window.location.href = '../agenda.php'</script>";
}else{
    echo "Erro em fazer o agendamento!". mysqli_connect_error();
}
$con->close();


}


?>