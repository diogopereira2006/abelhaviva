<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Cadastro - Colaborador</title>
</head>
<body>



    <div class="container">
        <form  action="php/cadstro.php" class="cadastro-form" method="post">
            <h1>Cadastre-se</h1>

            <label for="empresa">Nome da Empresa Representante</label>
            <input type="text"  id="empresa" name="empresa" required>

            <label for="email">Email Institucional</label>
            <input type="text"  id="email"  name="email"  required>

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <label for="senha">Senha</label>
            <input type="password"  id="senha" name="senha" required>

            <label for="senhadois">Confirmar senha</label>
            <input type="password" name="senhadois" id="senhadois"  required>

            <button type="submit" name="enviar" id="enviar" >Cadastrar</button>
        </form>
    </div>
</body>
</html>