<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>cadastro</title>
</head>
<body>
    <div class="container">
        <form class="cadastro-form">
            <h1>Cadastre-se</h1>

            <label for="empresa">Nome da Empresa Representante</label>
            <input type="text" id="empresa" name="empresa" required>

            <label for="email">Email Institucional</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <label for="senha">Confirmar senha</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>