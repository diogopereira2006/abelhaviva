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
    modal.style.display = "none";
}

// Função para fechar o modal de adição de evento
function fecharModal() {
    var modal = document.getElementById("eventoModal");
    modal.style.display = "block";
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

// No início do arquivo agenda.js

// ... (código existente)

// ... (código existente)

let eventos = []; // Adiciona essa linha para armazenar os eventos

function adicionarEvento() {
    var data = document.getElementById("data").value; // Altera para "data"
    var descricao = document.getElementById("evento").value; // Altera para "evento"

    // Cria um objeto representando o evento
    var novoEvento = {
        data: data,
        descricao: descricao
    };

    // Adiciona o evento ao array de eventos
    eventos.push(novoEvento);

    // Atualiza o quadro de eventos
    atualizarQuadroEventos();

    fecharModal(); // Fecha o modal após adicionar o evento
}

function atualizarQuadroEventos() {
    var quadroEventos = document.getElementById("quadroEventos");
    quadroEventos.innerHTML = ""; // Limpa o conteúdo atual do quadro

    // Ordena os eventos por data (assumindo formato YYYY-MM-DD)
    eventos.sort((a, b) => a.data.localeCompare(b.data));

    // Adiciona os eventos ao quadro
    eventos.forEach(evento => {
        var divEvento = document.createElement("div");
        divEvento.classList.add("evento");

        var spanData = document.createElement("span");
        spanData.classList.add("data");
        spanData.textContent = evento.data;

        var spanDescricao = document.createElement("span");
        spanDescricao.classList.add("descricao");
        spanDescricao.textContent = evento.descricao;

        divEvento.appendChild(spanData);
        divEvento.appendChild(spanDescricao);

        quadroEventos.appendChild(divEvento);
    });
}
// ... (código existente)

function atualizarQuadroEventos() {
    var quadroEventos = document.getElementById("quadroEventos");
    var tituloQuadro = document.getElementById("tituloQuadro");

    quadroEventos.innerHTML = ""; // Limpa o conteúdo atual do quadro

    // Ordena os eventos por data (assumindo formato YYYY-MM-DD)
    eventos.sort((a, b) => a.data.localeCompare(b.data));

    // Adiciona os eventos ao quadro
    eventos.forEach(evento => {
        var divEvento = document.createElement("div");
        divEvento.classList.add("evento");

        var spanData = document.createElement("span");
        spanData.classList.add("data");
        spanData.textContent = evento.data;

        var spanDescricao = document.createElement("span");
        spanDescricao.classList.add("descricao");
        spanDescricao.textContent = evento.descricao;

        divEvento.appendChild(spanData);
        divEvento.appendChild(spanDescricao);

        quadroEventos.appendChild(divEvento);
    });

    // Atualiza o título do quadro
    tituloQuadro.textContent = "Seu Quadro de Eventos";

    // Exibe mensagem se o quadro estiver vazio
    if (eventos.length === 0) {
        var mensagemVazia = document.createElement("p");
        mensagemVazia.textContent = "Seu quadro de eventos está vazio.";
        quadroEventos.appendChild(mensagemVazia);
    }
    function verificarEventos() {
        window.location.href = 'quadroeventos.html';
        console.log("Verificando eventos...");
    }
}

// ... (restante do código)


// ... (restante do código)

