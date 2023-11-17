<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>cadastro</title>
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
                          '>Registro cadastrado com Sucesso...!!!</p>";
                    }
                }
            ?>
    <div class="container">
        <form  action="php/cadstro.php" class="cadastro-form" method="post">
            <h1>Cadastre-se</h1>

            <label for="empresa">Nome da Empresa Representante</label>
            <input type="text" name="empresa" id="empresa"  required>

            <label for="email">Email Institucional</label>
            <input type="text"   name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password"  name="senha" id="senha" required>

            <label for="senhadois">Confirmar senha</label>
            <input type="password" name="senhadois" id="senhadois"  required>

            <button type="submit" name="enviar" id="enviar" >Cadastrar</button>
        </form>
    </div>
</body>
</html>