<?php
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true)){

	$sql="SELECT * FROM inicio_login WHERE email_institu = '$email' and senha = '$senha'";

	header('location:login.php');

	
}
$logado = $_SESSION['email'];


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="website Icon" type="png" href="img/BEEALIVE.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/profissional.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="javascript/profissionais.js" defer></script>
    <title>Profissionais</title>
</head>
<body>
  
  <h1 style="font-size: 50px; font-family: arial; text-align: center; color: #fff;">PROFISSIONAIS BEE ALIVE</h1>
    
   <div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left"></i>
    <ul class="carousel">
      <li class="card">
        <div class="img"><img src="img/caio.jpg" alt="img" draggable="false"></div>
        <h2>Caio Alves</h2>
        <span>Psicólogo</span>
        <div class="rating">
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
        </div>
        <div class="btns">
        <button>Contratar</button>
        <button onclick="saiba()">Saiba mais</button>
      </div>
      </li>
      <li class="card">
        <div class="img"><img src="img/annaaraujo.jpg" alt="img" draggable="false"></div>
        <h2>Anna Araujo</h2>
        <span>Psicologa organizacional</span>
        <div class="rating">
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='far fa-star'></i>
        </div>
        <div class="btns">
        <button>Contratar</button>
        <button onclick="saiba2()">Saiba mais</button>
      </div>
      </li>
      <li class="card">
        <div class="img"><img src="img/fabiosouza.jpg" alt="img" draggable="false"></div>
        <h2>Fabio Souza</h2>
        <span>Psiquiatra</span>
        <div class="rating">
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='far fa-star'></i>
          <i class='far fa-star'></i>
       
        </div>
        <div class="btns">
        <button>Contratar</button>
        <button onclick="saiba3()">Saiba mais</button>
      </div>
      </li>
      <li class="card">
        <div class="img"><img src="img/otavio.jpg" alt="img" draggable="false"></div>
        <h2>Otávio Costa</h2>
        <span>Psiquiatra</span>
        <div class="rating">
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
        
          
        </div>
        <div class="btns">
        <button>Contratar</button>
        <button onclick="saiba6()">Saiba mais</button>
      </div>
      </li>
      <li class="card">
        <div class="img"><img src="img/isabellerocha.jpg" alt="img" draggable="false"></div>
        <h2>Isabelle Rocha</h2>
        <span>Psicologo Hospitalar</span>
        <div class="rating">
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='far fa-star'></i>
          
        </div>
        <div class="btns">
        <button>Contratar</button>
        <button onclick="saiba4()">Saiba mais</button>
      </div>
      </li>
      <li class="card">
        <div class="img"><img src="img/kauan.jpg" alt="img" draggable="false"></div>
        <h2>Kauan de Souza</h2>
        <span>Psicologo Clinico</span>
        <div class="rating">
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
          <i class='fas fa-star'></i>
        </div>
        <div class="btns">
        <button>Contratar</button>
        <button onclick="saiba5()">Saiba mais</button>
      </div>
      </li>
    </ul>
    <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
  <div id="mensagem" style="display:none;">
    <span  onclick="fechar()" id="fechar"class="material-symbols-outlined">
        close
        </span>
        <div class="perfil">
          <img src="img/caio.jpg" alt="" width="120px">
        </div>
        <h3>Caio Alves Rocha</h3>
        <P>Caio Alves Rocha é um Psicólogo comprometido e altamente qualificado, dedicado a auxiliar individuos a superar desafios<br>
        emocionais e psicológicos. Sua formação academica sólida e paixão psicologia o destacam como um profissional respeitado<br>
      no campo da saúde mental.</P>
      <br>
      <h1 class="especializacao">Formação:</h1>
      <p>- Graduação em Psicologia pela Universidade Casa Branca <br>
      - Registro no CRP 12345/FICT</p>

      <h1 class="especializacao">Especializações:</h1>
      <li>1- Terapia Cognitivo-Compornamental;</li>
      <li>2- Estrese Pós-Traumático;</li>
      <li>3- Sindrome de Burnout.</li>
      <p>Caio Alves Rocha oferece um ambiente terapêutico acolhedor e seguro, onde os pacientes podem explorar seus desafios emocionais.<br>
        Para agendar uma consulta,entre em contato pelo telefone (99) 3245-4692 ou pelo e-mail <a href="" id="cainho">Cainho@gmail.com</a> <br>Sinta-se 
        á vontade para procurar ajuda e orientação na busca de um melhor bem estar emocional com o apoio de Caio Alves Rocha.
      </p>   
  </div>
  <div id="mensagem2" style="display:none;">
    <span  onclick="fechar2()" id="fechar"class="material-symbols-outlined">
        close
        </span>
        <div class="perfil">
          <img src="img/annaaraujo.jpg" alt="" width="120px">
        </div>
        <h3>Anna Araujo Oliveira- CRP Nº 65789/FICT</h3>
        <p>Anna Araujo Oliveira é uma psicóloga especializada no tratamento da ansiedade generalizada e fobia social. Ela é reconhecida por sua<br>
        abordagem compassiva e eficaz para ajudar os pacientes a superar desafios relacionados á saúde mental.</p>
        <br>
        <h1 class="especializacao">Formação:</h1>
        <p> - Graduação em Psicologia pela Universidade Serenidade(Ficticia)<br>
        - Registro no CRP 65789/FICT</p>
        <h1 class="especializacao">Especializações: </h1>
        <li>1- Ansiedade Generalizada;</li>
        <li>2- Fobia Social.</li>
        <br>
        <p>Anna Araujo Oliveira oferece um ambiente seguro e confidencial para seus pacientes explorarem suas preocupações e desafios emocionais.<br>
        Se você está procurando ajuda para ansiedade generalizada, fobia social ou outras questões relacionadas á saúde mental,não hesite em<br>
      entrar em contato com Anna para agendar uma consulta. Você pode alcançá-la pelo telefone (14) 456-7890 ou pelo email<br>
    <a href="" id="cainho">anna.psico@gmail.com</a> <br>Encontre apoio e orientação para uma vida mais equilibrada com a ajuda de Anna Araujo Oliveira.</p>
  </div>
  <div id="mensagem3" style="display:none;">
    <span  onclick="fechar3()" id="fechar"class="material-symbols-outlined">
        close
        </span>
        <div class="perfil">
          <img src="img/fabiosouza.jpg" alt="" width="120px">
        </div>
        <h3>Fabio Souza Barbosa - CRP Nº 54321/FICT</h3>
        <P>Fabio Souza Barbosa é um pscólogo altamente capacitado e dedicado, com especialização no tratamento de Burnout e Depressão.<br>
        Ele é conhecido por sua abordagem empática e eficaz no auxilio de pacientes que enfrentam esses desafios de saúde mental.</P>
        <br>
        <h1 class="especializacao">Formação:</h1>
        <p>- Graduação em Psicologia pela Universidade de Brasília<br>
        - Registro no CRP 54321/FICT</p>
        <br>
        <h1 class="especializacao">Especializações:</h1>
        <li>1- Sindrome de Burnout;</li>
        <li>2- Depressão</li>
        <br>
        <p>Fabio Souza Barbosa oferece um ambiente acolhedor e confidencial para seus pacientes explorarem suas preocupações e desafios emocionais.<br>
        Se você está buscando ajuda Burnout, Depressão ou outras questões relacionadas á saúde mental, não hesite em entrar com Fabio<br>
        para agendar uma consulta. Você pode alcançá-lo pelo telefone (14)123-4567 ou pelo <a href="" id="cainho">fabio.psico@gmail.com</a>.<br>
        Encontre apoio e orientação para uma vida mais saudável e feliz com a ajuda de Fabio Souza Barbosa.</p>
  </div>
  <div id="mensagem4" style="display:none;">
    <span  onclick="fechar4()" id="fechar"class="material-symbols-outlined">
        close
        </span>
        <div class="perfil">
          <img src="img/isabellerocha.jpg" alt="" width="120px">
        </div>
        <h3>Isabelle Rocha Gomes -CRP Nº 67890/FICT</h3>
        <p>Isabelle Rocha Gomes é uma psicóloga qualificada, especializada no tratamento de problemas relacionados á ansiedade, depressao e transtornos<br>
        de personalidade. Ela é reconhecida por sua abordagem compassiva e eficaz no auxilio de pacientes que enfrentam esses desafios de saúde mental.</p>
        <br>
        <h1 class="especializacao">Formação:</h1>
        <p>- Graduação em Psicologia pela Universidade de Marília<br>
        - Registro no CRP 67890/FICT</p>
        <br>
        <h1 class="especializacao">Especializações:</h1>
        <li>1- Ansiedade;</li>
        <li>2- Depressão;</li>
        <li>3- Transtornos de Personalidade.</li>
        <br>
        <p>Isabelle Rocha Gomes oferece um ambiente acolhedor e confidencial para seus pacientes explorarem suas preocupações e desafios emocionais.<br>
        Se você está buscando ajuda para ansiedade, depressao, transtornos de personalidade ou outras questões relacionadas á saúde mental, não hesite<br>
        em entrar em contato com Isabelle para agendar uma consulta. Você pode alcançá-la pelo telefone (14) 987-6543 ou pelo e-mail<br>
      <a href="" id="cainho">isabelle.psico@gmail.com</a><br> Encontre apoio e orientação para uma vida mais saudável e equilibrada com a ajuda de Isabelle Rocha Gomes.</p>
  </div>
  <div id="mensagem5" style="display:none;">
    <span  onclick="fechar5()" id="fechar"class="material-symbols-outlined">
        close
        </span>
        <div class="perfil">
          <img src="img/kauan.jpg" alt="" width="120px">
        </div>
        <h3>Kauan de Souza Martins</h3>
        <p>Kauan de Souza Martins é um Psicólogo altamente capacitado e comprometido, especializado no tratamento de Transtornosde Déficit de Atenção e<br>
          Hiperatividade (TDAH), Transtorno do Espectro Autista (TEA) e Estresse Pós-traumático (PTSD). Ele é conhecido por sua abordagem empática e <br>
          eficaz ao auxiliar pacientes que enfrentam esses desafios de saúde mental.</p>
          <br>
          <h1 class="especializacao">Formação:</h1>
          <p>- Graduação em Psicologia pela Universidade de Belo Horizonte<br>
          - Registro no CRP 23456/FICT</p>
          <br>
          <h1 class="especializacao">Especializações:</h1>
          <li>1- TDAH (Transtorno de Déficit de Atenção e Hiperatividade);</li>
          <li>2- TEA (Transtorno do Espectro Autista);</li>
          <li>3- Estresse Pós-Traumático (PTSD).</li>
          <br>
          <p>Kauan de Souza Martins proporciona um ambiente acolhedor e confidencial para seus pacientes explorarem suas preocupações e desafios emocionais.<br>
           Se você ou alguém que você conhece está buscando ajuda para o TDAH, TEA, Estresse Pós-Traumático ou outras questões relacionadas á saúde mental,<br>
           não hesite em entrar em contato com Kauan para agendar uma consulta. Você pode alcançá-lo pelo telefone (14)567-8901 ou pelo e-mail<br>
          <a href="" id="cainho">kauan.psico@gmail.com</a><br>Encontre apoio e orientação para uma vida mais saudável e equilibrada com a ajuda de Kauan de Souza Martins. </p>

  </div>
  <div id="mensagem6" style="display:none;">
    <span  onclick="fechar6()" id="fechar"class="material-symbols-outlined">
        close
        </span>
        <div class="perfil">
          <img src="img/otavio.jpg" alt="" width="120px">
        </div>
        <h3>Otávio Costa Alves - CRP Nº 34567/FICT</h3>
        <p>Otávio Costa Alves é um psicólogo altamente capacitado, cujo foco principal de atuação é a psicanálise.<br> Ele é especializado no tratamento de transtornos ansiosos <br>e é reconhecido por sua abordagem compassiva e profunda na compreensão dos desafios emocionais de seus pacientes.</p>
        <br>
        <h1 class="especializacao">Formação:</h1>
        <p>- Graduação em Psicologia pela Universidade De São Paulo<br>
          - Registro no CRP 34567/FICT</p>
        <br>
        <h1 class="especializacao">Especializações:</h1>
       <li> 1- Psicanálise;</li>
       <li> 2- Transtornos Ansiosos.</li>
       <br>
       <p>Otávio Costa Alves oferece um ambiente acolhedor e confidencial para seus pacientes explorarem suas preocupações e desafios emocionais.
         <br>Se você está buscando ajuda para transtornos ansiosos, ou deseja uma abordagem psicanalítica para suas questões emocionais,
          <br>não hesite em entrar em contato com Otávio para agendar uma consulta. 
          <br>Você pode alcançá-lo pelo telefone (10) 234-5678 ou pelo e-mail<a href="" id="cainho">otavio.psico@email.com</a>
          <br>
           <br>Encontre apoio e orientação para uma vida mais enriquecedora com a ajuda de Otávio Costa Alves.</p>
  </div>
</body>
</html>