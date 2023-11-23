<?php
session_start();
<<<<<<< HEAD
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
=======
if(isset($_POST['enviar']) && !empty($_POST['email']))
{
    $email = $_POST['email'];

    $sql = "SELECT * FROM inicio_login WHERE email_institu = '$email'";
 

echo"bem vindo <h1>$email</h1>";
>>>>>>> 4284d92f55f527c4bfaea9130b3b8272fc3f1a99
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
                    <?php
                    echo "bem vindo <h1><u>$email</u></h1>"
                     

                    ?>
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

        <script>
        function irParaOutraPagina() {
            window.location.href = 'seuplano.html'; 
        }
        </script>
</body>
</html>