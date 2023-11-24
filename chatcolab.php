<?php
session_start();

$email = $_SESSION['email'];{

    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email'";


}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="styles/chat.css">
    <body>
        <body>
             <div class="chat">
                <div class="usuarios" id="usuarios">
                    <div class="busca-usuario">
                        <input type="text" id="buscaUsuario" placeholder="Buscar usuário..." onkeyup="buscarUsuario()">
                        <button onclick="buscarUsuario()">Buscar profissional:</button>
                    </div>
                    <div class="usuario" data-usuario="usuario1" onclick="conectarUsuario(this)">
                        <img src="img/caio.jpeg">
                        <span>Dr. Caio Alves</span>
                    </div>
                    <div class="usuario" data-usuario="usuario2" onclick="conectarUsuario(this)">
                        <img src="img/annaaraujo.jpg">
                        <span>Dra. Anna Araújo</span>
                    </div>
                    <div class="usuario" data-usuario="usuario3" onclick="conectarUsuario(this)">
                        <img src="img/fabiosouza.jpg">
                        <span>Dr. Fabio Souza</span>
                    </div>
                </div>
                <div class="conversa">
                    <div class="mensagens" id="mensagens">
                        <div class="mensagem bot">Olá! <?=$email?>,eu sou seu Assistente Bee Alive. Como posso te ajudar hoje?</div>
                    </div>
                    <div class="entrada">
                        <input type="text" id="mensagemInput" placeholder="Digite sua mensagem...">
                        <button onclick="enviarMensagem()">Enviar</button>
                    </div>
                    <div class="comandos-bot">
                        <button class="botao verificar" onclick="verificarEventos()">Verificar Eventos</button>
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