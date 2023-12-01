<?php
session_start();
include_once "php/conexao.php";

$evento = $_SESSION['evento'];
$data = $_SESSION['data'];{


}


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadro de Eventos</title>
    <link rel="stylesheet" href="quadro.css">
</head>
<body>
    
    <div class="quadro-eventos" id="quadroEventos">
        <h2>Quadro de Eventos</h2>
        <div class="evento">
            <strong>Data:</strong>
            <p><?=$data?></p>
        </div>
        <div class="evento">
            <strong>Evento:</strong>
            <p><?=$evento?></p>
        </div>
        <!-- Adicione mais eventos conforme necessário -->
    </div>

    <script src="quadro.js"></script>
</body>
</html>

