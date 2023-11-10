let dataAtual = new Date();
let mesAtual = dataAtual.getMonth();
let anoAtual = dataAtual.getFullYear();

function gerarCalendario(mes, ano) {
    const diasContainer = document.getElementById("dias");
    const titulo = document.getElementById("titulo");

    diasContainer.innerHTML = "";
    titulo.innerHTML = `${getNomeMes(mes)} ${ano}`;

    const primeiroDia = new Date(ano, mes, 1);
    const ultimoDia = new Date(ano, mes + 1, 0);

    for (let i = 1; i <= ultimoDia.getDate(); i++) {
        const dia = new Date(ano, mes, i);
        const divDia = document.createElement("div");
        divDia.innerText = i;

        if (i === dataAtual.getDate() && mes === mesAtual && ano === anoAtual) {
            divDia.classList.add("hoje");
        }

        diasContainer.appendChild(divDia);
    }
}

function getNomeMes(mes) {
    const nomesMeses = [
        "Janeiro", "Fevereiro", "Março",
        "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro",
        "Outubro", "Novembro", "Dezembro"
    ];
    return nomesMeses[mes];
}

function mudarMes(valor) {
    mesAtual += valor;
    if (mesAtual > 11) {
        mesAtual = 0;
        anoAtual++;
    } else if (mesAtual < 0) {
        mesAtual = 11;
        anoAtual--;
    }
    gerarCalendario(mesAtual, anoAtual);
}

// No início do arquivo agenda.js

// ... (código existente)

// Função para abrir o modal de adição de evento
function abrirModal() {
    var modal = document.getElementById("eventoModal");
    modal.style.display = "block";
}

// Função para fechar o modal de adição de evento
function fecharModal() {
    var modal = document.getElementById("eventoModal");
    modal.style.display = "none";
}

// Função para adicionar um evento ao calendário
function adicionarEvento() {
    var data = document.getElementById("dataEvento").value;
    var descricao = document.getElementById("descricaoEvento").value;

    // Adicione aqui a lógica para salvar o evento na data especificada

    // Por exemplo, você pode exibir o evento no console por enquanto
    console.log("Evento adicionado em " + data + ": " + descricao);

    fecharModal(); // Fecha o modal após adicionar o evento
}

// ... (restante do código)


gerarCalendario(mesAtual, anoAtual);
