<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout de Pagamento</title>
    <link rel="stylesheet" href="styles/checkout.css">
</head>
<body>
    <form action="php/pagamento.php" method="post">
    <div class="checkout">
        <h1>Escolha a forma de pagamento</h1>

        <div class="opcoes-pagamento">
            <div class="opcao" id="opcao-boleto">
                <h2>Boleto Bancário</h2>
                <label>
                    <input type="radio"  id="opcaopagamento" name="opcaopagamento" value="boleto">
                    Pagar com Boleto Bancário
                </label>
                <div class="dados-boleto">
                    <h2 style="font-size: 15px;">Dados do Boleto</h2>
                    <input type="text" id="nomes" name="nomes"  placeholder="Nome Completo" >
                    <input type="text" id="cpfboleto" name="cpfboleto" placeholder="CPF" >
                    <input type="text" id="enderecoboleto" name="enderecoboleto" placeholder="Endereço">
                    <input type="text" value="6X R$ 1299,99" disabled>
                </div>
            </div>

            <div class="opcao" id="opcao-cartao">
                <img class="imagem-cartao" src="img/marcelão.png" alt="Cartão de Crédito">
                <h2>Cartão de Crédito</h2>
                <label>
                    <input type="radio" id="opcaopagamento" name="opcaopagamento" value="cartao">
                    Pagar com Cartão de Crédito
                </label>
                <div class="dados-cartao">
                    <h2 style="font-size: 15px;">Dados do Cartão</h2>
                    <input type="text" id="numerocartao" name="nuemro cartao"  placeholder="Número do Cartão">
                    <input type="text" id="validadecartao" name="validadecartao"  placeholder="Validade (MM/AA)">
                    <input type="text" id="cvvcartao" name="cvvcartao"  placeholder="CVV">
                    <input type="text" id="nometitular" name="nometitular"  placeholder="Nome do Titular">
                    <input type="text" value="6X R$ 1299,99" disabled>
                </div>
            </div>
        </div>

        <button class="botao-pagamento">Pagar</button>
    </div>
    <script src="checkout.js"></script>
    <div class="checkout">
    <div class="opcao" id="opcaocartao" name="opcaocartao">
        <h2>Pagar com Cartão de Crédito</h2>
        <label>
            <img src="cartao.png" alt="Cartão de Crédito" class="imagem-cartao">
            <input type="radio" id="opcaopagamento"name="opcaopagamento" value="cartao" checked>
            Pagar com Cartão de Crédito
        </label>
        <div class="dados-cartao">
            <h2>Dados do Cartão</h2>
            <input type="text" id="numerocartao" name="numerocartao" placeholder="Número do Cartão">
            <input type="text" id="validadecartao" name="validadecartao"placeholder="Validade (MM/AA)">
            <input type="text" id="cvvcartao" name="cvvcartao" placeholder="CVV">
            <input type="text" id="nometitular" name="nometitular"  placeholder="Nome do Titular" >
            <input type="text"  value="R$ 100,00" disabled>
        </div>
        <button type="submit" id="enviar" name="enviar">Realizar Pagamento</button>
    </div>
</div>
</form>
    <script src="javascript/checkout.js"></script>

</body>
</html>
