<?php
//$eventos = [];
 
//if ($_SERVER["REQUEST_METHOD"] == "GET") {
   // $data = $_GET["data"];
   // $descricao = $_GET["descricao"];
 
    //if ($data && $descricao) {
     //   $eventos[] = [
         //   "data" => $data,
           // "descricao" => $descricao
       // ];
   // }
//}
 
// Adicione aqui o código para salvar os eventos em um banco de dados ou em um arquivo.
// Exemplo:
// $jsonEventos = json_encode($eventos);
// file_put_contents("eventos.json", $jsonEventos);
 
header("Location:");
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
 <form action="" method="post">
        <span onclick="fecharModal()" class="fechar">Abrir</span>
    <div class="eventoModal" id="eventoModal">
        <h3>Adicionar Evento</h3>
        <input type="date" nome="dataEvento" id="dataEvento" required>
        <input type="text" nome="descricaoEvento"id="descricaoEvento" placeholder="Descrição do Evento" required>
        <button onclick="adicionarEvento()" type="submit">Adicionar</button>
    </div>
</form>

    <script src="javascript/agenda.js"></script>
</body>
</html>
