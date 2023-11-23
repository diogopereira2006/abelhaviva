<?php
session_start();
$email = $_SESSION['email'];{
    
}
if(isset($status)){
    
    if ($status == "OK"){
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

    $email = $_SESSION['email'];

    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email'";
 

echo "bem vindo <h1>$email</h1>";
}
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

        <div class="imgBx">
            <img src="img/nestle_blue.png">
        </div>
        <div class="content">
            <div class="details">
                <h2>Nestlé <br><span>Perfil Empresa
                </span></h2>
                
                <div class="data">
                    <a href="agenda.html">Sua Agenda</h3>
                    <a href="chat.html">Chat</h3>
                </div>
                <div class="actionBtn" style="text-decoration: none; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <button href="seuplano.html" style="text-decoration: none !important;">Seu Plano</button>
                    <button href="info.html" style="text-decoration: none !important;">Info</button>
                </div>
            </div>
            
            </div>
        </div>
        <h4>Bem vindo <?=$email?></h4>
        <style>
            h4{
                margin-top: 15rem;
                margin-left: -17rem;
            }
        </style>
        

        <script>
        function irParaOutraPagina() {
            window.location.href = 'seuplano.html'; 
        }
        </script>
</body>
</html>