<?php
require_once "php/conexao.php";
session_start();
$email = $_SESSION['email'];{
    
}


$email = $_SESSION['email'];{
if(isset($_POST['enviar']) && !empty($_POST['email']))
{
    $email = $_POST['email'];

    $sql = "SELECT * FROM cadastro_empresa WHERE email_institu = '$email'";
    // $resultado = mysqli_query($con, $sql);
    // echo "<pre>";
    // var_dump($resultado);
    // echo "</pre>";
    // die();
 

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
        <label for="inputImage" class="imgBx">
            <img src="http://placecage.com/100/100" alt="Imagem de perfil" id="profileImage">
        </label>
        <input type="file" accept="image/*" id="inputImage" onchange="previewImage(event)">

        <div class="content">
            <div class="details">
                <h2>Nestlé <br><span>Perfil Empresa
                </span></h2>
                
                <div class="data">
                    <a href="agenda.php">Sua Agenda</h3>
                    <a href="chat.php">Chat</h3>
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
        
        function irParaOutraPagina() {
                window.location.href = 'seuplano.html';
            }

            function irParaTelaInicial() {
                window.location.href = 'inicio.html'; // Substitua pelo destino desejado
            }
        </script>
</body>
</html>