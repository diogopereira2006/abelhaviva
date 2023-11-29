
function conectarUsuario(elemento) {
    var usuarios = document.getElementsByClassName('usuario');
    for (var i = 0; i < usuarios.length; i++) {
        usuarios[i].style.backgroundColor = '#f7f7f7';
    }
    elemento.style.backgroundColor = '#ccc';
}

function agendarEventos() {
    var mensagem = document.createElement('div');
    mensagem.classList.add('mensagem', 'usuario');
    mensagem.textContent = 'Agende seu evento!';
    document.getElementById('mensagens').appendChild(mensagem);
    document.getElementById('mensagens').scrollTop = document.getElementById('mensagens').scrollHeight;

    setTimeout(function() {
        var linkAgendarEventos = document.getElementById('linkAgendarEventos');
        linkAgendarEventos.href = 'agenda.php'; // Substitua pelo destino desejado
        linkAgendarEventos.click();
    }, 2000); // Espera 2 segundos antes de redirecionar
}


function verificarEventos() {
    var mensagem = document.createElement('div');
    mensagem.classList.add('mensagem', 'usuario');
    mensagem.textContent = 'Verifique seus eventos!';
    document.getElementById('mensagens').appendChild(mensagem);
    document.getElementById('mensagens').scrollTop = document.getElementById('mensagens').scrollHeight;

    setTimeout(function() {
        var linkVerificarEventos = document.getElementById('linkVerificarEventos');
        linkVerificarEventos.href = 'agenda.php'; // Substitua pelo destino desejado
        linkVerificarEventos.click();
    }, 2000); // Espera 2 segundos antes de redirecionar
}



function enviarMensagem() {
    var mensagemInput = document.getElementById('mensagemInput');
    var mensagemTexto = mensagemInput.value;
    if (mensagemTexto.trim() !== '') {
        var mensagem = document.createElement('div');
        mensagem.classList.add('mensagem', 'usuario');
        mensagem.textContent = mensagemTexto;
        document.getElementById('mensagens').appendChild(mensagem);
        mensagemInput.value = '';
        document.getElementById('mensagens').scrollTop = document.getElementById('mensagens').scrollHeight;
    }
}

// Substitua os valores pelas credenciais do seu projeto Firebase
const firebaseConfig = {
    apiKey: "YOUR_API_KEY",
    authDomain: "YOUR_AUTH_DOMAIN",
    projectId: "YOUR_PROJECT_ID",
    storageBucket: "YOUR_STORAGE_BUCKET",
    messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
    appId: "YOUR_APP_ID"
  };
  
  // Inicialize o Firebase
  firebase.initializeApp(firebaseConfig);
  
  // Enviar mensagem
  function enviarMensagem() {
    var mensagemInput = document.getElementById('mensagemInput');
    var mensagemTexto = mensagemInput.value;
    if (mensagemTexto.trim() !== '') {
      var mensagem = {
        texto: mensagemTexto,
        remetente: 'João' // Nome do remetente (pode ser o nome do usuário)
      };
      firebase.database().ref('mensagens').push(mensagem);
      mensagemInput.value = '';
    }
  }
  
  // Receber mensagens em tempo real
  firebase.database().ref('mensagens').on('child_added', function(snapshot) {
    var mensagem = snapshot.val();
    var mensagensDiv = document.getElementById('mensagens');
    var mensagemDiv = document.createElement('div');
    mensagemDiv.classList.add('mensagem', 'usuario');
    mensagemDiv.textContent = mensagem.remetente + ': ' + mensagem.texto;
    mensagensDiv.appendChild(mensagemDiv);
    mensagensDiv.scrollTop = mensagensDiv.scrollHeight;
  });
  function conectarUsuario(elemento) {
    var nomeUsuario = elemento.getAttribute('data-usuario');
    window.location.href = 'agenda.html?usuario=' + encodeURIComponent(nomeUsuario);
}

function conectarTelefone() {
    // Obter o valor do campo de telefone
    var numeroTelefone = document.getElementById("telefoneInput").value;

    // Remover caracteres não numéricos do número de telefone
    var numeroLimpo = numeroTelefone.replace(/\D/g, '');

    // Número do WhatsApp
    var numeroWhatsApp = "14988393894"

    // Construir a URL do WhatsApp com o número preenchido
    var urlWhatsApp = "https://api.whatsapp.com/send?phone=" + numeroWhatsApp;

    // Redirecionar para o WhatsApp
    window.location.href = urlWhatsApp;
}



// chat.js

function adicionarMensagemDoUsuario(mensagem) {
    console.log('Adicionando mensagem do usuário:', mensagem);
    const mensagensElement = document.getElementById('mensagens');
    const mensagemUsuarioElement = document.createElement('div');
    mensagemUsuarioElement.className = 'mensagem usuario';
    mensagemUsuarioElement.textContent = mensagem;
    mensagensElement.appendChild(mensagemUsuarioElement);
}

function adicionarMensagemDoBot(mensagem) {
    console.log('Adicionando mensagem do bot:', mensagem);
    const mensagensElement = document.getElementById('mensagens');
    const mensagemBotElement = document.createElement('div');
    mensagemBotElement.className = 'mensagem bot';
    mensagemBotElement.textContent = mensagem;
    mensagensElement.appendChild(mensagemBotElement);
}

function adicionarOpcoesDeResposta(opcoes) {
    console.log('Adicionando opções de resposta:', opcoes);
    const entradaElement = document.getElementById('entrada');

    // Limpa as opções antigas
    entradaElement.innerHTML = '';

    // Cria botões para cada opção
    opcoes.forEach(opcao => {
        const botaoOpcao = document.createElement('button');
        botaoOpcao.textContent = opcao;
        botaoOpcao.addEventListener('click', () => responderOpcao(opcao));
        entradaElement.appendChild(botaoOpcao);
    });
}

function iniciarNovaConversa() {
    // Limpa as mensagens antigas
    document.getElementById('mensagens').innerHTML = '';

    // Inicia uma nova conversa com uma mensagem de boas-vindas
    adicionarMensagemDoUsuario('Olá, gostaria de encontrar o melhor profissional para você. Por favor, responda às seguintes perguntas:');

    // Pergunta inicial do chatbot
    adicionarMensagemDoBot('Qual área você está procurando?');

    // Adiciona opções de resposta para o usuário
    adicionarOpcoesDeResposta(['Terapia Ocupacional', 'Psicologia Clínica', 'Psicologia do Trabalho']);
}

function realizarPergunta(pergunta, opcoes) {
    adicionarMensagemDoBot(pergunta);
    adicionarOpcoesDeResposta(opcoes);
}

function responderOpcao(opcao) {
    adicionarMensagemDoUsuario(opcao);

    // Lógica para processar a resposta e apresentar a próxima pergunta
    // Neste exemplo, estamos apenas adicionando mais perguntas e sugestões de profissionais
    if (opcao === 'Terapia Ocupacional') {
        realizarPergunta('Estaria interessado em atendimento online ou presencial?', ['Online', 'Presencial']);
    } else if (opcao === 'Psicologia Clínica') {
        realizarPergunta('O que envolve a sua necessidade?', ['Problemas pessoais', 'Problemas no trabalho', 'Vícios', 'Outro']);
    } else if (opcao === 'Psicologia do Trabalho') {
        realizarPergunta('Qual a sua necessidade?', ['Trabalho em grupo', 'Comunicação', 'Vida profissional e pessoal', 'Ambiente de trabalho desconfortável']);
    } else if (opcao === 'Online' || opcao === 'Presencial' || opcao === 'Problemas pessoais' || opcao === 'Problemas no trabalho' || opcao === 'Vícios' || opcao === 'Outro' || opcao === 'Trabalho em grupo' || opcao === 'Comunicação' || opcao === 'Vida profissional e pessoal' || opcao === 'Ambiente de trabalho desconfortável') {
        adicionarMensagemDoBot(`Estamos procurando os melhores ${opcao.toLowerCase()}s para você.`);
        sugerirProfissionalComBaseNasRespostas();
    } else if (opcao === 'Sim') {
        const numeroProfissional = '14988393894'; // Substitua pelo número do profissional
        const mensagemWhatsApp = 'Olá, estou interessado(a) em seus serviços. Podemos conversar?';
        const linkWhatsApp = `https://wa.me/${numeroProfissional}?text=${encodeURIComponent(mensagemWhatsApp)}`;

        // Abre o link do WhatsApp em uma nova janela
        window.open(linkWhatsApp, '_blank');
    } else if (opcao === 'Não') {
        // Lógica para lidar com a resposta 'Não' após a sugestão do profissional
    }
}

function sugerirProfissionalComBaseNasRespostas() {
    // Lógica para sugerir um profissional com base nas respostas do usuário
    // Esta é uma lógica simplificada e você pode adaptá-la conforme necessário
    const profissionalSugerido = 'Profissional Sugerido: Anna Araújo';
    adicionarMensagemDoBot(profissionalSugerido);
    adicionarMensagemDoBot('Esse profissional atende às suas necessidades?');
    adicionarOpcoesDeResposta(['Sim', 'Não']);
}
