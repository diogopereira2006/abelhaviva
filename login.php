<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="website Icon" type="png" href="img/BEEALIVE.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
  rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>
<?php
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
                         margin-top:-34%;
                         margin-right:-23%;
                         float:right;
                          '>Cadastrado com Sucesso,faça seu login !</p>";
                    }
                }
            ?>
    <div class="container">
        <form action="php/login.php" class="login-form" method="post">
            <h1>Login</h1>
            <div class="form-group">
                <label for="email">E-mail Institucional</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" name="enviar" id="enviar">Entrar</button>
            <a href="logincolab.php" style="font-size: 10px; color: brown; margin-top: 20px;">Sou colaborador</h2>
        </form>
    </div>
</body>
</html>