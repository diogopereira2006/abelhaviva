<?php
session_start();
if(isset($_GET['status'])){
    $status = $_GET['status'];
    if ($status == "ok"){
        echo "<p 
        style='
         background-color:#9AE19D;
         color:white; 
         text-align:center;
         padding:10px; 
         font-weight:500;
         margin-left:-20%;
          '>Registro cadastrado com Sucesso...!!!</p>";
    }
}
?>





<!DOCTYPE html>
<html lang="pt-be">
<head>
<title>Página perfil</title>
<link rel="stylesheet" type="text/css" href="styles/plaginaposlogin.css">
</head>
<body>
    <div class="card">
        <div class="imgBx">
            <img src="img/nestle_blue.png">
        </div>
        <div class="content">
            <div class="details">
                <h2>Nestlé <br><span>Perfil Empresa</span></h2>
                <div class="data">
                    <a href="agenda.html">Sua Agenda</h3>
                    <a href="chat.html">Chat</h3>
                </div>
                <div class="actionBtn" style="text-decoration: none; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <button href="seuplano.html" style="text-decoration: none !important;">Seu Plano</button>
                    <button href="info.html" style="text-decoration: none !important;">Mais Informações</button>
                </div>
            </div>
            </div>
        </div>

        <script src="javascript/plaginaposlogin.js"></script>
</body>
</html>