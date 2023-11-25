<?php
session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true)){

	$sql="SELECT * FROM cadastro_empresa WHERE email_institu = '$email' and senha = '$senha'";

	header('location:loginempresa.php');

	
}
$logado = $_SESSION['email'];

?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Planos</title> 
    <link rel="stylesheet" href="styles/planos.css">    
</head>
<body>  
	
	<div class="grid">

		<div class="grid-item">
			<div class="card">
				<img src="img/bronze.png" alt="medalha1" class="card-img">
				<div class="card-content">
					<h1 class="card-header">PLANO BÁSICO SEMESTRAL</h1>
					<p class="card-text">
						➮ Acesso a Plataforma Online <br>
						➮ Avaliação e Monitoramento da Saúde Mental <br>
						➮ Conteúdo Educativo <br>
						➮ Sessões de Aconselhamento Online<br>
						➮ Ferramentas de Autocuidado<br>
						➮ Relatórios de Desempenho<br>
						➮ Suporte Técnico <br>
						➮ Boletins Informativos <br>
						➮ Acesso a Recursos de Leitura <br>
					</p>
					<p class="card-text2">
						6X de 1299,99

					</p>
					<a class="card-btn" href="pagamento.php">
						GARANTIR PLANO

					</a>
				</div>
				</div>
			</div>
			<div class="grid-item">
			<div class="card">
				<img src="img/medalha-de-prata.png" alt="medalha2" class="card-img">
				<div class="card-content">
					<h1 class="card-header">PLANO PREMIUM SEMESTRAL</h1>
					<p class="card-text">
						➮ Acesso Prioritário a Profissionais de Saúde Mental <br>
						➮ Programas de Bem-Estar Personalizados <br>
						➮ Sessões de Terapia Presenciais Opcionais <br>
						➮ Treinamentos Exclusivos para Líderes e Gestores <br>
						➮ Integração com Programas de Promoção da Saúde Física <br>
						➮ Acesso a Workshops de Desenvolvimento de Habilidades
					</p>
					<p class="card-text2">
						6X de 3099,99

					</p>
					<a class="card-btn" href="pagamento3.html">
						GARANTIR PLANO 

					</a>
				</div>
				</div>
			</div>
			<div class="grid-item">
			<div class="card">
				<img src="img/medalha-de-ouro.png" alt="medalha3" class="card-img">
				<div class="card-content">
					<h1 class="card-header">PLANO PREMIUM ANUAL</h1>
					<p class="card-text">
						➮ Programas Avançados de Desenvolvimento Pessoal <br>
						➮ Programas Exclusivos de Resiliência e Prevenção de Estresse<br>
						➮ Serviços de Concierge Personalizado <br>
						➮ Relatórios Avançados e Análises Detalhadas <br>
						➮ Integração Estratégica com Estratégias de Bem-Estar Organizacional <br>
						➮ Recursos Exclusivos
					</p>
					<p class="card-text2">
						12X de 3599,99

					</p>
					<a class="card-btn" href="pagamento2.html">
						GARANTIR PLANO 

					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
