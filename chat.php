<?php
session_start();

$nome = $_SESSION['nome'];
$sobrenome = $_SESSION['sobrenome'];{

    $sql = "SELECT * FROM inicio_login WHERE nome_colab = '$nome' and sobrenome = '$sobrenome'";

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
    <title>Chat</title>
    <link rel="stylesheet" href="styles/chat.css">
</head>
<body>
    <div class="chat">
        <div class="conversa">
            <div class="mensagens" id="mensagens">
                <div class="mensagem bot">Olá <?=$nome?> <?=$sobrenome?>, eu sou seu Assistente Bee Alive. Como posso te ajudar hoje?</div>
            </div>
            <div class="entrada" id="entrada"> <!-- Adicionei o ID 'entrada' aqui -->
                <input type="text" id="mensagemInput" placeholder="Digite sua mensagem...">
                <button onclick="enviarMensagem()">Enviar</button>
            </div>
            <div class="opcoes-resposta"> <!-- Adicionei esta div para mostrar as opções de resposta -->
                <!-- As opções de resposta aparecerão aqui dinamicamente -->
            </div>
            <div class="comandos-bot">
                <button class="botao agendar" onclick="agendarEventos()">Agendar Evento</button>
                <button class="botao verificar" onclick="verificarEventos()">Verificar Eventos</button>
                <button class="botao descobrir" onclick="iniciarNovaConversa()">O melhor profissional para você</button>
                <a id="linkAgendarEventos" style="display:none;"></a>
                <a id="linkVerificarEventos" style="display:none;"></a>
            </div>
        </div>
        <div class="telefone">
            <input type="tel" id="telefoneInput" placeholder="Seu número de telefone">
            <button onclick="conectarTelefone()">Conectar</button>
        </div>
    </div>

    <script src="javascript/chat.js"></script>
</body>
</html>
