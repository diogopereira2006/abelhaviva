<?php
require_once "php/conexao.php";
session_start();
$email = $_SESSION['email'];
$empresa = $_SESSION['empresa'];{
    
}


$email = $_SESSION['email'];{
if(isset($_POST['enviar']) && !empty($_POST['email']))
{
    $email = $_POST['email'];


    $sql = "SELECT * FROM cadastro_empresa WHERE email_institu = '$email'";
    $resultado = mysqli_query($con, $sql);
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
<a href="inicio.php">
    <div class="left"></div></a>


    <div class="card">
        <label for="inputImage" class="imgBx">
            <img src="http://placecage.com/100/100" alt="Imagem de perfil" id="profileImage">
        </label>
        <input type="file" accept="image/*" id="inputImage" onchange="previewImage(event)">

        <div class="content">
            <div class="details">
                <h2><?=$empresa?> <br><span>Perfil Empresa</span></h2>
                
                <div class="data">
                    <a href="agenda.php"><h3>Sua Agenda</h3></a>
                    <a href="chatemp.php"><h3>Chat</h3></a>
                </div>
                <div class="actionBtn" style="text-decoration: none; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                    <a  href="seuplano.php" style="text-decoration: none; "><button>Seu Plano</button></a>
                    <a href="info.html" style="text-decoration: none;"><button>Info</button></a>
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
        
        <script src="javascript/plaginaposlogin.js"></script>
   

       
</body>
</html>