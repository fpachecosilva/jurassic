<!DOCTYPE HTML>
<html>

<head>

	<?php
	include 'assets/config.php';

	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';

	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	?>
	<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

	<meta property="og:title" content="<? echo $tituloPagina ?>" />
	<meta name="description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<? echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->

</head>

<body class="Home">
	<header class="DesktopItem">
		<article>
			<div class="box-links">
				<a href="#ancora-abas">Megashow</a>
				<a href="#valores">Informações</a>
				<a href="#ingressos">Ingressos</a>
			</div>
			<!-- <a class="cta-button" href="<? echo $IngressoSP ?>">Ingressos para SP</a> -->
			<!-- <a class="cta-button" href="<? echo $IngressoRJ ?>">Ingressos para RJ</a> -->
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar Ingresso</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<? echo $images ?>bg3.jpg">
		<!-- <img class="dragao-img DesktopItem" src="<? echo $images ?>dino_rex_464x765.png"> -->
		<article>
			<!-- <img style="float:none" src="<? echo $images ?>aviso.jpg"> -->
			<h1>Uma aventura inesquecível para toda família</h1>
		</article>
		<!-- <a onclick="pixel()" class="Btn-primary" href="<? echo $siteVendas ?>">Comprar ingressos</a> -->
		<a class="Btn-primary" href="#ingressos">Comprar ingressos</a>

		<h2>JURASSIC SAFARI EXPERIENCE DINER ADVENTURE</h2>
		<h3 id="ancora-abas">
			Com temporadas de estrondoso sucesso em diversas cidades brasileiras, que já contaram mais de 800 mil espectadores no formato Drive-in, a megaexperiência chega à cidade em novo formato trazendo diversas réplicas animadas de dinossauros em tamanhos reais que irão percorrer pelo espaço em performances e movimentos impressionantes
		</h3>
		<!-- <img class="dino-img DesktopItem" src="<? echo $images ?>dino_spino_622x781.png"> -->
	</section>

	<section id="menu-abas">
		<div class="menu-links">
			<a class="megashow ativo" href="#ancora-abas">MEGASHOW</a>
			<a class="espetaculo" href="#ancora-abas">O ESPETÁCULO</a>
			<a class="exposicao" href="#ancora-abas">OUTRAS INFORMAÇÕES</a>
		</div>
		<p id="megashow">
			A experiência jurássica que apresenta uma aventura inesquecível para toda a família estreia em São Paulo no dia <strong>09 de abril</strong>, no estacionamento do <strong>Shopping VillaLobos</strong>, agora em novo formato! 
			<br><br>
			O megaevento <strong>Jurassic Safari Diner Adventure</strong> mistura muita interatividade, diversão e ciência em um ambiente lúdico e recheado de conhecimento, experiência e aventura, a mistura perfeita entre diversão e gastronomia para toda a família. 
			<br><br>
			O show conta a história de um grupo de cientistas que recriou dinossauros de diversos períodos a partir do DNA de fósseis. Dinossauros que agora vivem, ali, dentro de um ambiente mágico. Com a plateia em formato diner*, o público irá se surpreender com as dezenas de répteis pré-históricos animados por técnicas de manipulação e animatronic, que irão correr pelo espaço em performances e movimentos impressionantes bem pertinho dos participantes. Todo o conteúdo de <strong>Jurassic Safari Diner Adventure</strong> tem supervisão de um paleontólogo para que ficção e educação desempenhem a sinergia perfeita.
		</p>
		<p id="espetaculo">
			O cardápio é composto de uma seleção variada e deliciosa de receitas com menu completo. Entre entradas, pratos principais e sobremesas, o público poderá escolher opções que vão desde saladas e costela ao barbecue com batatas salteadas, até hambúrgueres tradicionais e vegetariano, massas, risotos, nhoques e parmeggianas de frango e vermelha. As sobremesas não ficam atrás: são diversas opções com destaque para o bolo red velvet e o tradicional pudim.
			<br><br>
			Os valores de Jurassic Safari Diner Adventure começam a partir de R$35,00 e podem ser adquiridos pelo site <a style="text-decoration: underline" href="#ingressos">www.jurassicsafari.com.br</a>. O evento atende a todas as regras de higiene necessárias para sua realização.
			<br><br>
			<strong>Protocolo Covid</strong><br>
			Para acesso ao local do evento é obrigatório que adultos apresentem comprovante de vacinação contra COVID-19 com, no mínimo, a primeira dose - físico ou digital (disponível nos aplicativos conecte SUS). Crianças não precisam apresentar.
			<br><br>
			<strong>Pesquisa científica</strong><br>
			Todo o conteúdo do megashow tem supervisão de Bruno Gonçalves Augusta. Paleontólogo integrante do Laboratório de Paleontologia – Museu de Zoologia da Universidade de São Paulo (MZUSP), Bruno possui graduação em Ciências Biológicas pelo Centro Universitário Fundação Santo André (2007) e Mestrado em Sistemática, Taxonomia Animal e Biodiversidade pelo Museu de Zoologia da USP (2013). Realizou doutorado no Programa de Pós-Graduação em Zoologia do Instituto de Biociências da USP e é coordenador geral do Grupo CienciAção - Divulgação Científica. Tem experiência nas áreas de Zoologia, com ênfase em Paleozoologia; e Divulgação Científica, com ênfase em educação não-formal de Paleontologia em Exposições, Museus e Centros de Ciência. Sua pesquisa está concentrada em ontogenia, morfometria e filogenia de répteis fósseis.
		</p>
		<p id="exposicao">
			<strong>
			SERVIÇO<br>
			JURASSIC SAFARI DINER ADVENTURE
			<br><br></strong>

			<strong>
			SÃO PAULO/SP<br>
			Estacionamento Shopping VillaLobos</strong> - Sessões a partir de 09 de Abril<br>
			Av. Dra. Ruth Cardoso, 4777 - Jardim Universidade Pinheiros, São Paulo - SP, 05477-000
			<br><br>
			
			<strong>
			SALVADOR/BA<br>
			Shopping da Bahia</strong> - Sessões a partir de 18 de Junho<br>
			Av. Tancredo Neves, 148, Caminho das Árvores - Salvador - Bahia - CEP 41820-020
			<br><br>

			<strong>
			CAMPINAS/SP<br>
			Parque D. Pedro Shopping</strong> - Sessões a partir de 25 de Junho<br>
			Av. Guilherme Campos, 500 - Jardim Santa Genebra, Campinas - SP, 13087-901
			<br><br>
			
			<strong>
			PORTO ALEGRE/RS<br>
			Estacionamento do Barra Shopping Sul</strong> - Sessões a partir de 02 de Julho<br>
			Av. Diário de Notícias, 300 - Cristal, Porto Alegre - RS, 90810-080
			<br><br>

			<strong>
			BRASÍLIA/DF<br>
			Estacionamento do Park Shopping Brasília</strong> - Sessões a partir de 13 de Maio<br>
			SMAS Trecho 1 - Guará, Brasília - DF, 71219-900
			<br><br>
			
			
			Quintas e Sextas – 18h e 20h<br>
			Sábados e Domingos – 10h30, 13h, 15h, 17h, 19 e 21h<br>
			Obs.: Sessões extras poderão ser abertas conforme demanda.<br>
			Capacidade: 300 Lugares<br>
			Duração: 75 minutos<br>
			Classificação Etária: Livre
		</p>

		<video id='video' src="<? echo $images ?>SAFARI DINER 16x9 SP.mp4" preload="auto" type="video/mp4" controls poster="<? echo $images ?>video.jpg"></video>

		<div class="parceiros DesktopItem">
			<!-- <p style="text-align: center">PARCEIROS</p>
			<img class="logo-parceiros" src="<? echo $images ?>logos-parceiros-euro-semparar.png"> -->

			<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
			<img class="logo-parceiros" src="<? echo $images ?>media-partner.png">
		</div>

	</section>

	<section id="icones">
		<h1 class="DesktopItem">JURASSIC SAFARI</h1>
		<h1 class="MobileItem">JURASSIC SAFARI</h1>

		<div class="menu-locais-links">
			<a class="active" local="sp">SÃO PAULO</a>
			<!-- <a class="" local="ca">CAMPINAS</a> -->
			<a class="" local="ba">SALVADOR</a>
			<a class="" local="pa">PORTO ALEGRE</a>
			<a class="" local="br">BRASÍLIA</a>
		</div>	
		
		<div class="local sp active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING VILLA LOBOS</h2>					
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>
		
		<div class="local pr">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO PARK SHOPPING BARIGÜI</h2>					
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>

		<div class="local br">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO PARK SHOPPING BRASÍLIA</h2>					
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>

		<div class="local pa">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO BARRA SHOPPING SUL</h2>					
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>

		<div class="local ca">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>PARQUE D.PEDRO SHOPPING</h2>					
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>

		<div class="local ba">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>SHOPPING DA BAHIA</h2>					
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 75min</h2>
				</div>
			</div>
		</div>
		
	</section>

	<section id="valores">
				
		<div class="local sp active">
			<h1>HORÁRIOS E VALORES - SP</h1>

			<h2>Quinta e Sexta - 16h, 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<h2>Preços referentes a ingressos para sessões a partir de 21/04</h2>

			<div class="experiencias">
				<p>MEGASHOW</p>
			</div>
			
			<table class=''>
				<tbody>
					<tr>
						<td rowspan ='2'></td>
						<td class='first'>QUI - 18h, 20h</td>
						<td class='first'>SAB - 13h, 15h, 17h, 19h, 21h</td>
					</tr>
					<tr>						
						<td class='first'>SEX - 20h</td>
						<td class='first'>DOM - 13h, 15h, 17h, 19h</td>
					</tr>
					<tr>
						<td>Couvert Artístico</td>
						<td>R$ 50,00</td>
						<td>R$ 60,00</td>
					</tr>
					<tr>
						<td>Promocional Couvert Art + Consumação</td>
						<td>R$ 80,00 (R$ 35 Couvert Art + R$ 45 consumação)</td>
						<td>R$ 90,00 (R$ 45 Couvert Art + R$ 45 consumação)</td>
					</tr>					
				</tbody>
			</table>

			<table class="">
				<tbody>
					<tr>
						<td rowspan ='2'></td>
						<td class='first'>QUI - 16h</td>
						<td class='first' rowspan='2'>SEX - 18h</td>
						<td class='first'>SAB - 10h30</td>
					</tr>
					<tr>						
						<td class='first'>SEX - 16h</td>
						<td class='first'>DOM - 10h30 e 21h</td>
					</tr>
					<tr>
						<td>Preços Especiais</td>
						<td>R$ 35,00 Consumação (sem cobrança de Couvert Art)</td>
						<td>R$ 40,00 Consumação (sem cobrança de Couvert Art)</td>
						<td>R$ 55,00 (R$ 10 Couvert Art + R$ 45,00 consumação)</td>
					</tr>										
				</tbody>
			</table>
		</div>

		<div class="local pr">
			<h1>HORÁRIOS E VALORES - PR</h1>

			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<h2>Preços referentes a ingressos para sessões a partir de 21/04</h2>

			<div class="experiencias">
				<p>EXPERIÊNCIAS</p>
			</div>
			
			<table class='table-encontro'>
				<tbody>
					<tr class='linha1'>
						<th colspan='2'>ENCONTRO COM PERSONAGENS</th>
					</tr>
					<tr>
						<td colspan='2' class='bgnormal'>Nessa experiência você terá um encontro com alguns personagens para interação e foto</td>
					</tr>
					<tr>
						<td class='esq'>Dias / Sessões</td>
						<td class='dir'>Interação com Personagens + Consumação</td>
					</tr>
					<tr class='linha1'>
						<td class='esq'>QUI / SEX (16h)</td>
						<td class='dir'>Promo: R$ 35,00 (Consumação) - sem cobrança de Couvert Art</td>
					</tr>
					<tr class='linha2'>
						<td class='esq'>SEX (16h)</td>
						<td class='dir'>Promo: R$ 40,00 (Consumação) - sem cobrança de Couvert Art</td>
					</tr>
					<tr class='linha3'>
						<td class='esq'>SAB / DOM (10h30) e DOM (21h)</td>
						<td class='dir'>Promo: R$ 55,00 (R$ 45,00 Consumação) + (R$ 10,00 Couvert Art)</td>
					</tr>					
				</tbody>
			</table>

			<table class="table-megashow">
				<tbody>
					<tr class="linha1">
						<th colspan='4'>MEGASHOW</th>
					</tr>

					<tr>
						<td colspan='4'>Megaexperiência com muita música, dança e teatro, além de efeitos especiais visuais e olfativos.</td>
					</tr>

					<tr>
						<td class='esq' colspan='2'>Dias / Sessões</td>
						<td class='meio'>Couvert Artístico</td>
						<td class='dir'>Couvert Art + Consumação</td>
					</tr>

					<tr class='linha1'>
						<td rowspan='2' colspan='2'>QUI (18h)</td>
						<td rowspan='2'>R$ 35,00</td>
						<td>R$ 60,00</td>
					</tr>

					<tr class='linha1'>
						<td>R$ 45 Consum + R$ 15 Couvert Art</td>
					</tr>

					<tr class='linha2'>
						<td rowspan='2' colspan='2'>QUI / SEX (20h)</td>
						<td rowspan='2'>R$ 50,00</td>
						<td>R$ 80,00</td>
					</tr>

					<tr class='linha2'>
						<td>R$ 45 Consum + R$ 35 Couvert Art</td>
					</tr>

					<tr class='linha3'>
						<td rowspan='4'>SAB / DOM</td>												
						<td>13h00</td>
						<td rowspan='5'>R$ 60,00</td>
						<td rowspan='2'>R$ 90,00</td>
					</tr>
					
					<tr class='linha3'>
						<td>15h00</td>
					</tr>

					<tr class='linha3'>
						<td>17h00</td>
						<td rowspan='3'>R$ 45 Consum + R$ 45 Couvert Art</td>
					</tr>

					<tr class='linha3'>
						<td>19h00</td>
					</tr>
					
					<tr class='linha3'>
						<td>SAB</td>										
						<td>21h00</td>
					</tr>					
				</tbody>
			</table>
		</div>		

		<div class="local br">
			<h1>VALORES - DF</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<h2 class="MobileItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<table>
				<tr>
					<td class="first"></td>
					<td class="first">QUI / SEX</td>
					<td class="first">SÁB / DOM</td>
				</tr>

				<tr>
					<td>Couvert Artístico</td>
					<td>R$ 50,00</td>
					<td>R$ 60,00</td>
				</tr>

				<tr>
					<td>Promocional Couvert Art<br> + Consumação</td>
					<td>R$ 80,00<br>(R$ 35,00 Couvert + R$ 45,00 consumação)</td>
					<td>R$ 90,00<br>(R$ 45,00 Couvert + R$ 45,00 consumação)</td>
				</tr>
			</table>
		</div>

		<div class="local pa">
			<h1>VALORES - RS</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<h2 class="MobileItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<table>
				<tr>
					<td class="first"></td>
					<td class="first">QUI / SEX</td>
					<td class="first">SÁB / DOM</td>
				</tr>

				<tr>
					<td>Couvert Artístico</td>
					<td>R$ 50,00</td>
					<td>R$ 60,00</td>
				</tr>

				<tr>
					<td>Promocional Couvert Art<br> + Consumação</td>
					<td>R$ 80,00<br>(R$ 35,00 Couvert + R$ 45,00 consumação)</td>
					<td>R$ 90,00<br>(R$ 45,00 Couvert + R$ 45,00 consumação)</td>
				</tr>
			</table>
		</div>

		<div class="local ca">
			<h1>VALORES - SP</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<h2 class="MobileItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<table>
				<tr>
					<td class="first"></td>
					<td class="first">QUI / SEX</td>
					<td class="first">SÁB / DOM</td>
				</tr>

				<tr>
					<td>Couvert Artístico</td>
					<td>R$ 50,00</td>
					<td>R$ 60,00</td>
				</tr>

				<tr>
					<td>Promocional Couvert Art<br> + Consumação</td>
					<td>R$ 80,00<br>(R$ 35,00 Couvert + R$ 45,00 consumação)</td>
					<td>R$ 90,00<br>(R$ 45,00 Couvert + R$ 45,00 consumação)</td>
				</tr>
			</table>
		</div>

		<div class="local ba">
			<h1>VALORES - BA</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<h2 class="MobileItem">Quinta e Sexta - 18h e 20h / Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>
			<table>
				<tr>
					<td class="first"></td>
					<td class="first">QUI / SEX</td>
					<td class="first">SÁB / DOM</td>
				</tr>

				<tr>
					<td>Couvert Artístico</td>
					<td>R$ 50,00</td>
					<td>R$ 60,00</td>
				</tr>

				<tr>
					<td>Promocional Couvert Art<br> + Consumação</td>
					<td>R$ 80,00<br>(R$ 35,00 Couvert + R$ 45,00 consumação)</td>
					<td>R$ 90,00<br>(R$ 45,00 Couvert + R$ 45,00 consumação)</td>
				</tr>
			</table>
		</div>

	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>

		<p class="aviso">
			Atendendo aos decretos municipais n°60.488 (São Paulo), o evento Jurassic Safari Experience, solicitará ao público que irá assistir e viver a experiência , o comprovante de vacinação do cidadão contra a COVID-19 para o acesso aos eventos. O público poderá apresentar o comprovante físico de vacinação (carteirinha de vacinação), ou de forma digital disponível nas plataformas ConectSUS, que podem ser baixados na loja de aplicativos do seu smartphone.
		</p>

		<div class="wrapper-card">			
						
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasSP ?>">
					<h2>SÃO PAULO</h2>
				</a>
			</div>

			<!-- <div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasCA ?>">
					<h2>CAMPINAS</h2>
				</a>
			</div> -->

			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasBA ?>">
					<h2>SALVADOR</h2>
				</a>
			</div>

			
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasRS ?>">
					<h2>PORTO ALEGRE</h2>
				</a>
			</div>

			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasDF ?>">
					<h2>BRASÍLIA</h2>
				</a>
			</div>
		</div>

		<!-- <div class="ingressostxt">
			<p>
				Venda de ingressos apenas on-line;<br>
				Obrigatório a apresentação do ingresso em forma digital ou impressa através de e-ticket. A leitura do ingresso será realizada através de leitores óticos, sem contato manual<br>
				A data do evento pode sofrer alteração mediante decreto da prefeitura ou por motivos de força maior.<br>
				Permitido o acesso com veículo com até 4 ocupantes independentemente da idade;<br>
				Após estacionar o veículo, deverá permanecer desligado o motor até término da sessão;<br>
				A liberação de saída dos veículos ocorrerá somente após término da sessão. Em caso de emergências acionar a equipe do evento através do pisca alerta.<br><br>

				A abertura das portas dos carros deve acontecer EXCLUSIVAMENTE para a ida ao banheiro. O público deve OBRIGATORIAMENTE permanecer dentro dos veículos durante toda a sessão/apresentação.<br><br>

				PREVENÇÃO AO COVID-19<br>
				• Aferição de temperatura no acesso, serão liberadas apenas pessoas com temperatura inferior à 37,5º;<br>
				• Permitido o acesso somente de veículos de passeio fechados, conforme legislação vigente. Veículos conversíveis apenas serão liberados com capota fechada;<br>
				• Vagas com distanciamento de 2,0m entre os veículos;<br>
				• OBRIGATÓRIO O USO DE MÁSCARAS, MESMO DENTRO DO VEÍCULO.<br>
				• Obrigatória a permanência no veículo durante toda a sessão, ficando terminantemente proibida a projeção de braços, cabeça ou qualquer outra parte do corpo para fora do veículo;<br>
				• Venda de alimentos e bebidas através de QRcode. Haverá lixeiras para descarte apenas na saída do evento.<br>
				Logo, como não há cobrança individual por pessoa, inaplicável a meia-entrada, cuja concessão depende das condições pessoais de cada indivíduo.<br>
				Protocolos Sanitários – Governo do Estado de São Paulo<br>
				Estamos INTEGRALMENTE focados no cumprimento dos protocolos relativos à retomada consciente, não apenas comunicando os procedimentos e exigências como aferindo o INTEGRAL cumprimento por todos.<br>
				Contamos com a sua colaboração para que todos possam ter a oportunidade de assistir a um grande espetáculo com segurança sem colocar em risco a manutenção das autorizações pertinentes. O descumprimento das normas estabelecidas sujeitarão o público a advertência e, em caso de reincidência, solicitação de retirada.<br>
			</p>
		</div> -->

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>fold-01 abertura/logo_470pxs.png">

	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=5511930133391&amp;text=Oi,%20vim%20através%20do%20website%20Jurassic%20Safari" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>