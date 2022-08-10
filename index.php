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
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar Ingresso</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<? echo $images ?>bg3.jpg">
		<article>
			<h1>Uma aventura inesquecível para toda família</h1>
		</article>
		<a class="Btn-primary" href="#ingressos">Comprar ingressos</a>

		<h2>JURASSIC SAFARI EXPERIENCE DINER ADVENTURE</h2>
		<h3 id="ancora-abas">
			Com temporadas de estrondoso sucesso em diversas cidades brasileiras, que já contaram mais de 800 mil espectadores no formato Drive-in, a megaexperiência chega à cidade em novo formato trazendo diversas réplicas animadas de dinossauros em tamanhos reais que irão percorrer pelo espaço em performances e movimentos impressionantes
		</h3>
	</section>

	<section id="menu-abas">
		<div class="menu-links">
			<a class="megashow ativo" href="#ancora-abas">MEGASHOW</a>
			<a class="espetaculo" href="#ancora-abas">O ESPETÁCULO</a>
			<a class="exposicao" href="#ancora-abas">OUTRAS INFORMAÇÕES</a>
		</div>
		<p id="megashow">
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
			PORTO ALEGRE/RS<br>
			Estacionamento do Barra Shopping Sul</strong> - Sessões a partir de 02 de Julho<br>
			Av. Diário de Notícias, 300 - Cristal, Porto Alegre - RS, 90810-080
			<br><br>

			<strong>
			BELO HORIZONTE/MG<br>
			Boulevard Shopping BH</strong> - Sessões a partir de 16 de Julho<br>
			Av. dos Andradas, 3000 - Santa Efigênia, Belo Horizonte - MG, 30260-070
			<br><br>

			<strong>
			CAMPINAS/SP<br>
			Parque D. Pedro Shopping</strong> - Sessões a partir de 25 de Junho​<br>
			Av. Guilherme Campos, 500 - Jardim Santa Genebra, Campinas - SP, 13087-901​
			<br><br>

			<strong>
			BRASÍLIA/DF<br>
			Estacionamento do Park Shopping Brasília</strong> - Sessões a partir de 05 de Novembro<br>
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
			<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
			<img class="logo-parceiros" src="<? echo $images ?>media-partner.png">
		</div>
	</section>

	<section id="icones">
		<h1>JURASSIC SAFARI</h1>
		<div class="menu-locais-links">
			<a class="" local="mg">BELO HORIZONTE</a>
			<a class="" local="sp">SÃO PAULO</a>
			<a class="active" local="pa">PORTO ALEGRE</a>
			<a class="" local="ca">CAMPINAS</a>
			<a class="" local="br">BRASÍLIA</a>
		</div>

		<div class="local pa active">
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

		<div class="local mg">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>BOULEVARD SHOPPING BH</h2>					
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
					<h2>PARQUE D. PEDRO SHOPPING​</h2>					
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

		<div class="local sp">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>PLAZA SUL SHOPPING</h2>					
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
		<div class="local pa active">
			<h1>VALORES - RS</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>			

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

			<br><br>
			<h2>Preços referentes a ingressos para sessões a partir de 14/07</h2>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">SÁB</td>
					<td class="first">DOM</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>10h30, 13h, 15h, 17h e 19h</td>
					<td>13h, 15h e 17h </td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 80,00</td>
					<td>R$ 45,00 Consumação + R$ 35,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 95,00</td>
					<td>R$ 45,00 Consumação + R$ 50,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">SÁB</td>
					<td class="first">DOM</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>21h</td>
					<td>10h30, 19h e 21h</td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 60,00</td>
					<td>R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 80,00</td>
					<td>R$ 45,00 Consumação + R$ 35,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>18h e 20h</td>
					<td>18h e 20h</td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 55,00</td>
					<td>R$ 45,00 Consumação + R$ 10,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 60,00</td>
					<td>R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>
		</div>

		<div class="local mg">
			<h1>VALORES - MG</h1>
			<h2>Quinta e Sexta - 18h e 20h <BR>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>

			<table class="tabela-a linha1">
				<tr>
					<td class="first" rowspan ='3'>Dias e Sessões</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>SÁB - 10h30, 13h, 15h, 17h e 19h</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>DOM - 13h, 15h, 17h e 19h</td>
				</tr>				
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 80,00 sendo R$ 45,00 Consumação + R$ 35,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 95,00 sendo R$ 45,00 Consumação + R$ 50,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>
			<table class="tabela-a linha2">
				<tr>
					<td class="first" rowspan ='3'>Dias e Sessões</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>SÁB - 21h</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>DOM - 10h30 e 21h</td>
				</tr>				
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 60,00 sendo R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 80,00 sendo R$ 45,00 Consumação + R$ 35,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>
			<table class="tabela-a linha3">
				<tr>
					<td class="first">Dias e Sessões</td>
					<td class="first">QUI e SEX - 18h e 20h</td>
				</tr>				
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 55,00 sendo R$ 45,00 Consumação + R$ 10,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 60,00 sendo R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>

			<br><br>
			<h2>Preços referentes a ingressos para sessões a partir de 28/07</h2>

			<table class="tabela-b linha1">
				<tr>
					<td class="first" rowspan ='3'>Dias e Sessões</td>					
				</tr>				
				<tr>
					<td class="first" colspan ='2'>SÁB - 10h30, 13h, 15h, 17h e 19h</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>DOM - 13h, 15h, 17h e 19h</td>
				</tr>				
				<tr>
					<td class="acesso-normal">Acesso Normal</td>
					<td>R$ 80,00 sendo R$ 45,00 Consumação + R$ 35,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="magic-pass">Magic Pass</td>
					<td>R$ 95,00 sendo R$ 45,00 Consumação + R$ 50,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>
			<table class="tabela-b linha2">
				<tr>
					<td class="first" rowspan ='3'>Dias e Sessões</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>SÁB - 21h</td>
				</tr>				
				<tr>
					<td class="first" colspan ='2'>DOM - 10h30 e 21h</td>
				</tr>				
				<tr>
					<td class="acesso-normal">Acesso Normal</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="magic-pass">Magic Pass</td>
					<td>R$ 80,00 sendo R$ 45,00 Consumação + R$ 35,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>				
			</table>
			<table class="tabela-b linha3">
				<tr>
					<td class="first">Dias e Sessões</td>
					<td class="first">QUI e SEX - 18h e 20h</td>
				</tr>
				<tr>
					<td class="acesso-normal">Acesso Normal</td>
					<td>R$ 60,00 sendo R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="magic-pass">Magic Pass</td>
					<td>R$ 70,00 sendo R$ 45,00 Consumação + R$ 25,00 Couvert Artístico com direito a MagicPass (acesso prioritário)</td>
				</tr>
			</table>
		</div>

		<div class="local ca">
			<h1>VALORES - SP</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">SÁB</td>
					<td class="first">DOM</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>10h30, 13h, 15h, 17h e 19h</td>
					<td>13h, 15h e 17h </td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 80,00</td>
					<td>R$ 45,00 Consumação + R$ 35,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 95,00</td>
					<td>R$ 45,00 Consumação + R$ 50,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">SÁB</td>
					<td class="first">DOM</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>21h</td>
					<td>10h30, 19h e 21h</td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 60,00</td>
					<td>R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 80,00</td>
					<td>R$ 45,00 Consumação + R$ 35,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>18h e 20h</td>
					<td>18h e 20h</td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 55,00</td>
					<td>R$ 45,00 Consumação + R$ 10,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 60,00</td>
					<td>R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>
		</div>

		<div class="local br">
			<h1>VALORES - DF</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>			

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

			<br><br>
			<h2>Preços referentes a ingressos para sessões a partir de 19/11</h2>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">SÁB</td>
					<td class="first">DOM</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>10h30, 13h, 15h, 17h e 19h</td>
					<td>13h, 15h e 17h </td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 80,00</td>
					<td>R$ 45,00 Consumação + R$ 35,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 95,00</td>
					<td>R$ 45,00 Consumação + R$ 50,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">SÁB</td>
					<td class="first">DOM</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>21h</td>
					<td>10h30, 19h e 21h</td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 60,00</td>
					<td>R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 80,00</td>
					<td>R$ 45,00 Consumação + R$ 35,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>

			<table>
				<tr>
					<td class="first">Dia</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>
				<tr>
					<td>Sessões</td>
					<td>18h e 20h</td>
					<td>18h e 20h</td>
				</tr>
				<tr>
					<td class="setora">Setor A</td>
					<td>R$ 55,00</td>
					<td>R$ 45,00 Consumação + R$ 10,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorvip">Setor VIP</td>
					<td>R$ 60,00</td>
					<td>R$ 45,00 Consumação + R$ 15,00 Couvert Artístico</td>
				</tr>
				<tr>
					<td class="setorpremium">Setor Premium</td>
					<td>R$ 70,00</td>
					<td>R$ 45,00 Consumação + R$ 25,00 Couvert Artístico com direito a FastPass (acesso preferencial)</td>
				</tr>
			</table>
		</div>

		<div class="local sp">
			<h1>HORÁRIOS E VALORES - SP</h1>
			<h2>Quinta e Sexta - 18h e 20h <br>Sáb e Dom - 10h30, 13h, 15h, 17h, 19h e 21h</h2>

			<div class="modelo-3">
				<table>
					<tr>
						<td class="cel-amarela">Dias e Sessões</td>
						<td class="cel-amarela">QUI e SEX - 16h, 18h e 20h</td>
					</tr>
					<tr>
						<td class="cel-azul">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde">Acesso Normal</td>
					</tr>
					<tr>
						<td>Combo VIP</td>
						<td>Combo VIP</td>
					</tr>
					<tr>
						<td>Show, Entrada e Prato Principal</td>
						<td>Show, Entrada e Prato Principal</td>
					</tr>
					<tr>
						<td>De R$ 104,90 por R$ 74,90</td>
						<td>De R$ 94,90 por R$ 64,90</td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
						<td class="cel-amarela" colspan="2">SÁB - 21h</td>
					</tr>
					<tr>
						<td class="cel-amarela" colspan="2">DOM - 19h e 21h</td>
					</tr>
					<tr>
						<td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde" colspan="2">Acesso Normal</td>
					</tr>
					<tr class="colunas-4">
						<td>Combo Premium</td>
						<td>Combo VIP</td>
						<td>Combo Premium</td>
						<td>Combo VIP</td>
					</tr>
					<tr class="colunas-4">
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
					</tr>
					<tr class="colunas-4">
						<td>De R$ 119,90 por R$ 89,90</td>
						<td>R$ 79,90</td>
						<td>De R$ 109,90 por R$ 79,90</td>
						<td>R$ 69,90</td>
					</tr>
				</table>

				<table>
					<tr>
						<td class="cel-amarela" rowspan="2" colspan="2">Dias e Sessões</td>
						<td class="cel-amarela" colspan="2">SÁB - 13h, 15h, 17h e 19h</td>
					</tr>
					<tr>
						<td class="cel-amarela" colspan="2">DOM - 13h, 15h, 17h</td>
					</tr>
					<tr>
						<td class="cel-azul" colspan="2">Magic Fast Pass (Acesso Exclusivo)</td>
						<td class="cel-verde" colspan="2">Acesso Normal</td>
					</tr>
					<tr class="colunas-4">
						<td>Combo Premium</td>
						<td>Combo VIP</td>
						<td>Combo Premium</td>
						<td>Combo VIP</td>
					</tr>
					<tr class="colunas-4">
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
						<td>Show, Entrada, Prato Principal e Sobremesa</td>
						<td>Show, Entrada, Prato Principal</td>
					</tr>
					<tr class="colunas-4">
						<td>De R$ 129,90 por R$ 99,90</td>
						<td>R$ 89,90</td>
						<td>De R$ 119,90 por R$ 89,90</td>
						<td>R$ 79,90</td>
					</tr>
				</table>

			</div>
		</div>

		<img class="mapa" src="<? echo $images ?>mapa.jpg">
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		<p class="aviso">
			Atendendo aos decretos municipais n°60.488 (São Paulo), o evento Jurassic Safari Experience, solicitará ao público que irá assistir e viver a experiência , o comprovante de vacinação do cidadão contra a COVID-19 para o acesso aos eventos. O público poderá apresentar o comprovante físico de vacinação (carteirinha de vacinação), ou de forma digital disponível nas plataformas ConectSUS, que podem ser baixados na loja de aplicativos do seu smartphone. Condições sujeitas às mudanças dos órgãos reguladores até a data de sua sessão.
		</p>

		<div class="wrapper-card">						
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasMG ?>">
					<h2>BELO HORIZONTE</h2>
				</a>
			</div>
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasSP ?>">
					<h2>SÃO PAULO</h2>
				</a>
			</div>
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasRS ?>">
					<h2>PORTO ALEGRE</h2>
				</a>
			</div>
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasCA ?>">
					<h2>CAMPINAS</h2>
				</a>
			</div>
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasDF ?>">
					<h2>BRASÍLIA</h2>
				</a>
			</div>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<? echo $images ?>fold-01 abertura/logo_470pxs.png">

	</section>


	<?php include 'assets/footer.php'; ?>

	<a href="https://api.whatsapp.com/send?phone=5511930133391&amp;text=Oi,%20vim%20através%20do%20website%20Jurassic%20Safari" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

</body>

</html>