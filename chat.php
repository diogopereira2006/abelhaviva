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
                        <img src="img/vecteezy_smiling-girl-in-white-t-shirt-on-pink-background_3542824.jpg">
                        <span>Dra. Amanda Fernandes</span>
                    </div>
                    <div class="usuario" data-usuario="usuario2" onclick="conectarUsuario(this)">
                        <img src="img/retrato-de-um-jovem-homem-bonito-de-pele-escura-com-um-sorriso-brilhante.jpg">
                        <span>Dr. Rogério Alcântara</span>
                    </div>
                    <div class="usuario" data-usuario="usuario3" onclick="conectarUsuario(this)">
                        <img src="img/handsome-confident-smiling-man-with-hands-crossed-chest.jpg">
                        <span>Dr. Roger Mello</span>
                    </div>
                </div>
                <div class="conversa">
                    <div class="mensagens" id="mensagens">
                        <div class="mensagem bot">Olá! <?=$email?> Eu sou seu Assistente Bee Alive. Como posso te ajudar hoje?</div>
                    </div>
                    <div class="entrada">
                        <input type="text" id="mensagemInput" placeholder="Digite sua mensagem...">
                        <button onclick="enviarMensagem()">Enviar</button>
                    </div>
                    <div class="comandos-bot">
                        <button class="botao agendar" onclick="agendarEventos()">Agendar Evento</button>
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