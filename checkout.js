document.querySelectorAll('input[name="opcao-pagamento"]').forEach(function(opcao) {
    opcao.addEventListener('change', function() {
        document.querySelectorAll('.dados-boleto, .dados-cartao').forEach(function(dados) {
            dados.style.display = 'none';
        });
        var dadosCorrespondentes = document.querySelector('.dados-' + this.value);
        if (dadosCorrespondentes) {
            dadosCorrespondentes.style.display = 'block';
        }
    });
});
document.querySelectorAll('input[name="opcao-pagamento"]').forEach(function(opcao) {
    opcao.addEventListener('change', function() {
        document.querySelectorAll('.dados-boleto, .dados-cartao').forEach(function(dados) {
            dados.style.display = 'none';
        });
        var dadosCorrespondentes = document.querySelector('.dados-' + this.value);
        if (dadosCorrespondentes) {
            dadosCorrespondentes.style.display = 'block';
        }
    });
});
