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
         display:flex;
         float:right;
         margin-right:-15%;
         margin-top:-30%;
          '>Bem vindo!</p>";
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
            <img src="http://placecage.com/100/100" alt="Imagem de perfil" id="profileImage">
        </div>
        <input type="file" accept="image/*" id="inputImage" onchange="previewImage(event)">
        <div class="content">
            <div class="details">
                <h2>Carla Domênico<br><span>Perfil Coolaborador</span></h2>
                <div class="data">
                    
                    
<a href="agenda.html">Sua empresa</a>
                    <a href="chat.html">Info</a>
                </div>
                <div class="actionBtn">
                    
        
<button href="agenda.php">Agenda da empresa</button>
                    <button href="chat.html">Chat</button>
                </div>
            </div>
        </div>
    </div>


        <script src="javascript/plaginaposlogin.js"></script>
</body>
</html>