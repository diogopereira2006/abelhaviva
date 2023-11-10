function buscarUsuario() {
    var input, filtro, usuarios, usuario, texto, i;
    input = document.getElementById('buscaUsuario');
    filtro = input.value.toUpperCase();
    usuarios = document.getElementById('usuarios');
    usuario = usuarios.getElementsByClassName('usuario');

    var usuarioEncontrado = null;

    for (i = 0; i < usuario.length; i++) {
        texto = usuario[i].getElementsByTagName('span')[0];
        if (texto.innerHTML.toUpperCase().indexOf(filtro) > -1) {
            usuario[i].style.display = '';
            if (usuario[i].getAttribute('data-usuario') === filtro) {
                usuarioEncontrado = usuario[i];
            }
        } else {
            usuario[i].style.display = 'none';
        }
    }

    if (usuarioEncontrado !== null) {
        conectarUsuario(usuarioEncontrado);
    }
}

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
        linkAgendarEventos.href = 'agenda.html'; // Substitua pelo destino desejado
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
        linkVerificarEventos.href = 'agenda.html'; // Substitua pelo destino desejado
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
    window.location.href = 'chat.html?usuario=' + encodeURIComponent(nomeUsuario);
}
