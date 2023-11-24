<?php
session_start();

$nome = $_SESSION['nome'];
$sobrenome = $_SESSION['sobrenome'];{
   
}
 $sql="SELECT * FROM inicio_login WHERE nome_colab = '$nome' and sobrenome = '$sobrenome'";
echo "bem vindo<h1>$nome  $sobrenome</h1>";


 

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
  rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles/inicio.css">
    <title>Inicio</title>
</head>

<body>

    <header>
          <div> <i  id="burguer"class="material-symbols-outlined" onclick="clickMenu()"> menu </i>
            <div class="imagemm">
            <img  class="abelha"src="img/BEEALIVE.png" width="100px">
        </div>
        <hr>
        <div class="cabecalho"  id="menu" onclick="clickLog()" style="display:none;">
        <a href="login.php">Login</a> <br><br>
        <a href="cadastro.php">Cadastre-se</a> <br><br>
        <a href="solucoes.html">Nossas Soluções</a> <br><br>
        <a href="profissionais.html">Conheça nossos profissionais</a><br><br>
        <a href="planos.php">Conheça nossos Planos</a><br><br>
        <a href="agenda.php">Agendamento</a><br><br>
        <a href="chat.php">Chat</a><br><br>
          
          </div>
        </div>

    </header>
    
    <div class="apresentacao-container">
      <div class="apresentacao-imagem">
          <img src="img/img_abelha.png" alt="Imagem de Apresentação">
      </div>
      <div class="apresentacao-texto">
          <h1>Equipe Bee Alive </h1>
          <p>Juntos estamos construindo um futuro mais doce e próspero. Ao escolher a Bee Alive, você não apenas investe em um atendimento de alta qualidade, mas também se torna parte de um movimento para proteger e promover a saúde mental para as gerações vindouras. Seja bem-vindo à nossa colmeia! </p>
          <a href="saibamais.html">Saiba Mais</a>
      </div>
  </div>

  <div class="image-reference">
    <img src="img/importancia.png" alt="Estrutura Organizacional">
    <h2>Qual é a importância da saúde mental no trabalho?</h2>
    <p>Os brasileiros dedicam em média 43,5 horas semanais ao trabalho, o equivalente a 8,7 horas por dia útil, conforme pesquisa da GetVoIP. Essa extensa permanência no emprego ressalta a influência direta da qualidade do ambiente e cultura organizacional no bem-estar psicológico. Profissionais expostos a mais de 8 horas diárias em ambientes estressantes têm maior probabilidade de desenvolver transtornos mentais.</p>

    </div>

    <div class="image-reference">
        <img src="img/beneficios.png" alt="Estrutura Organizacional">
        <h2>Benefícios de cuidar da saúde mental no trabalho</h2>
        <p>Dessa forma, além de proporcionar uma melhor qualidade de vida às pessoas, é possível melhorar os indicadores de recursos humanos:
            <br>●<strong> Reduzir a taxa de turnover e absenteísmo;</strong>
            <br>●<strong> Aumentar a produtividade;</strong>
            <br>●<strong> Aprimorar o clima organizacional;</strong>
            <br>● <strong> Retenção de talentos na empresa;</strong>
            <br>●<strong> Aumento da criatividade e do engajamento;</p></strong>
        
        </div>

  <div class="image-reference">
    <img src="img/acolhimento.png" alt="Estrutura Organizacional">
    <h2>Acolhimento psicológico em situações de crise e emergência</h2>
    <p>Em situações de crise e emergência, o acolhimento psicológico desempenha um papel fundamental na promoção do bem-estar emocional e no suporte ao paciente.<br> Além de oferecer um espaço seguro para expressar emoções e preocupações imediatas, as sessões visam fornecer estratégias e habilidades para enfrentar os desafios enfrentados.</p>
   
    </div>
 


      <div class="clientes-container">
        <h2 class="nossos">Nossos Clientes</h2>
        <div class="clientes">
            <div class="cliente-card">
                <img src="img/NESTLE.png" alt="Cliente 1">

            </div>
            <div class="cliente-card">
                <img src="img/marilan.png" alt="Cliente 2">
            </div>
            <div class="cliente-card">
                <img src="img/riachuelo.png" alt="Cliente 3">

            </div>
            <div class="cliente-card">
              <img src="img/cea18mil.png" alt="Cliente 4">
          </div>
          <div class="cliente-card">
            <img src="img/coca.png" alt="Cliente 5">
        </div>
        <div class="cliente-card">
          <img src="img/centro.png" alt="Cliente 6">

      </div>
        </div>
    </div>
  
        <br>    
 
</body>

<body2>
    
<div class="agendar-container">
  <div class="imagem">
      <img src="img/agendona.png" alt="Imagem de Agendamento">
  </div>
  <div class="dados">
      <h1>Agendar Reunião</h1>
      <form action="#">
          <label for="firstname">Primeiro Nome:</label>
          <input id="firstname" type="text" name="firstname" placeholder="Digite seu Primeiro Nome" required>

          <label for="lastname">Sobrenome:</label>
          <input id="lastname" type="text" name="lastname" placeholder="Digite seu Sobrenome" required>

          <label for="email">Email:</label>
          <input id="email" type="text" name="email" placeholder="Digite seu Email" required>

          <label for="fone">Telefone:</label>
          <input id="fone" type="text" name="fone" placeholder="(xx) xxxx-xxxx" required>

          <label>Descreva suas necessidades atuais:</label>
          <textarea class="textarea" type="text" placeholder="Necessidades" name="textarea" rows="4" required></textarea>

          <label>Qual o melhor dia para você?</label>
          <input type="text" placeholder="(MM/DD/YYYY)" name="date" required>

          <label>Qual o melhor horário para você?</label>
          <input type="time" placeholder="Melhor horário" name="time">

          <button type="submit">Agendar</button>
      </form>
  </div>
</div>

      </form>

    </div>
  </div>

  <div class="contato-cards">
    <div class="contato-card">
        <img src="img/telephone_159832.png" alt="Ícone de Telefone">
        <h2>Contato por Telefone</h2>
        <p>Telefone: (14) 988393894</p>
    </div>
    <div class="contato-card">
        <img src="img/mail_646094.png" alt="Ícone de E-mail">
        <h2>Contato por E-mail</h2>
        <p>E-mail: beetecalive@gmail.com</p>
    </div>
</div>

</body2>

<footer>
<img src="img/imagemfinal.svg">
<h1>Sua empresa pode ser um lugar melhor para se trabalhar!</h1>
<h3>Junte-se a Bee Alive!</h3>
</footer>

<script src="javascript/inicio.js"></script>
</html>