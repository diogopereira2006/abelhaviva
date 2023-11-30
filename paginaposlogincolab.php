<?php
session_start();
$nome = $_SESSION['nome'];
$sobrenome = $_SESSION['sobrenome'];{
    $sql = "SELECT * FROM inicio_login WHERE nome_colab = '$nome' and sobrenome = '$sobrenome'";

    
}


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Página perfil</title>
<link rel="stylesheet" type="text/css" href="styles/plaginaposlogin.css">
</head>
<body>


    <div class="card">
        <label for="inputImage" class="imgBx">
            <img src="http://placecage.com/100/100" alt="Imagem de perfil" id="profileImage">
        </label>
        <input type="file" accept="image/*" id="inputImage" onchange="previewImage(event)">

    
        <div class="content">
            <div class="details">
                <h2><?=$nome?> <?=$sobrenome?><br><span>Perfil Colaborador</span></h2>
                <div class="data">
                    
                    
                    <a href="suaemp.html">Sua empresa</a>
                    <a href="info.html">Info</a>
                </div>
                <div class="actionBtn">
                    
        
                    <a href="agenda.php"><button>Agenda da empresa</button></a>
                    <a href="chat.php"><button>Chat</button></a>
                </div>
            </div>
        </div>
    </div>


        <script src="javascript/plaginaposlogin.js"></script>
</body>
</html>