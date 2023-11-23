<?php

require_once "conexao.php";


if(isset($_POST['enviar'])){

    $data = $_POST["data"];
    $evento = $_POST["evento"];


    $sql = "INSERT INTO eventos (data_evento, descricao_evento) VALUES ('$data', '$evento')";
    

$resultado = mysqli_query($con, $sql);
if ($resultado) {
    echo "<script>alert('adicionado com sucesso !');
        window.location.href = '../agenda.php'</script>";
}else{
    echo "Erro em fazer o agendamento!". mysqli_connect_error();
}
$con->close();


}


?>