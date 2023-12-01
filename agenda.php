<?php
session_start();
require_once "php/conexao.php";

$evento = $_SESSION['evento'];
$data = $_SESSION['data'];{

    $sql = "SELECT * FROM eventos WHERE data_evento = '$data' and descricao_evento = '$evento' ";

}

{

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true)){

        $sql="SELECT * FROM inicio_login WHERE email_institu = '$email' and senha = '$senha'";
    
        header('location:login.php');
    
        
    }
    $logado = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <link rel="stylesheet" href="styles/agenda.css">
</head>
<body>
   
    <div class="calendario">
        <div class="header">
            <button onclick="mudarMes(-1)"> < </button>
            <h2 id="titulo"></h2>
            <button onclick="mudarMes(1)"> > </button>
        </div>
        <div class="dias-semana">
            <div>Dom</div>
            <div>Seg</div>
            <div>Ter</div>
            <div>Qua</div>
            <div>Qui</div>
            <div>Sex</div>
            <div>Sab</div>
        </div>
        <div class="dias" id="dias"></div>
    </div>
 <form action="php/agenda.php" method="post" class="criarEventoForm">
        <span onclick="fecharModal()" class="fechar">Criar Evento</span>
    <div class="eventoModal" id="eventoModal">
        <h3>Adicionar Evento</h3>
        <input type="date"   id="data"name="data" required>
        <input type="text" id="evento"name="evento" placeholder="Descrição do Evento" required>
        <button onclick="adicionarEvento()" type="submit" id="enviar" name="enviar">Adicionar</button>
    </div>
</form>
<div class="quadro-eventos" id="quadroEventos">
    <h2>Quadro de Eventos</h2>
    <string>data:<p><?=$data?></p></string>
    <string>evento:<P><?=$evento?></P></string>
</div>


    <script src="javascript/agenda.js"></script>
</body>
</html>
