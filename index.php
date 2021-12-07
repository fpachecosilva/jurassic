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
		<img class="bg" src="<? echo $images ?>bg2.jpg">
		<!-- <img class="dragao-img DesktopItem" src="<? echo $images ?>dino_rex_464x765.png"> -->
		<article>
			<!-- <img style="float:none" src="<? echo $images ?>aviso.jpg"> -->
			<h1>Uma aventura inesquecível para toda família</h1>
		</article>
		<!-- <a onclick="pixel()" class="Btn-primary" href="<? echo $siteVendas ?>">Comprar ingressos</a> -->
		<a class="Btn-primary" href="#ingressos">Comprar ingressos</a>

		<h2>JURASSIC SAFARI EXPERIENCE</h2>
		<h3 id="ancora-abas">
			O megashow em formato Drive-in, apresenta inúmeras réplicas animadas de dinossauros em tamanho real com movimentos e performances impressionantes entre os carros.
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
			Uma nova experiência em entretenimento, produzido pela Chaim Entretenimento, o Jurassic Safari Experience é uma opção de passeio para toda a família. O megaevento em formato Drive-in, mistura muita interatividade, diversão e ciência em um ambiente lúdico e recheado de conhecimento, experiência e aventura. Tudo isso acontece, simulando um safari na qual os "animais selvagens" podem ser vistos de perto ou seja, sem a necessidade de sair do carro.
			<br><br>

			Após a leitura do ingresso, os clientes serão direcionados para a nossa arena para o início do show que contará a história, de um grupo de cientistas que recriou dinossauros de diversos períodos a partir do DNA de fósseis e esses dinossauros agora vivem ali.

			<br><br>
			O público irá se surpreender com varias especies de répteis pré-históricos animados por técnicas de manipulação e animatronic, incluindo o temível T-Rex. O show ainda conta com o suporte de telões de led, para uma melhor interação com o publico. Todo o conteúdo de Jurassic Safari Experience tem supervisão de um paleontólogo para que ficção e educação desempenhem a sinergia perfeita.


		</p>
		<p id="espetaculo">
			Uma fantástica experiência ao lado de criaturas pré-históricas que resolveram adotar São Paulo, Rio de Janeiro como seu habitat natural. Jurassic Safari Experience se passa em um parque imaginário construído por cientistas que conseguiram recriar dinossauros de diversos períodos, como triássico, jurássico e cretáceo. Ao longo do trajeto, dentro de seus carros, todos se depararão com diferentes espécies de dinos até chegarem em uma arena. Ali, uma nova viagem começa. Mike, rapaz jovem e engraçado, será o nosso guia neste mundo encantado em que enormes répteis voltam à vida e interagem com a plateia. Durante toda a apresentação, Mike estará presente para nos explicar sobre o surgimento do Jurassic Safari Experience e como esses animais migníficos foram parar ali, além de dar detalhes científicos de cada um deles. O público irá se encantar com espécies de dinos como braquiossauros, estegossauros, anquilossauro, triceratops, o temido T-Rex e muitos outros. Uma aventura inesquecível para toda a família.
			<br><br>
			Pesquisa científica<br>
			Todo o conteúdo do megashow tem supervisão de Bruno Gonçalves Augusta. Paleontólogo integrante do Laboratório de Paleontologia – Museu de Zoologia da Universidade de São Paulo (MZUSP), Bruno possui graduação em Ciências Biológicas pelo Centro Universitário Fundação Santo André (2007) e Mestrado em Sistemática, Taxonomia Animal e Biodiversidade pelo Museu de Zoologia da USP (2013). Realizou doutorado no Programa de Pós-Graduação em Zoologia do Instituto de Biociências da USP e é coordenador geral do Grupo CienciAção - Divulgação Científica. Tem experiência nas áreas de Zoologia, com ênfase em Paleozoologia; e Divulgação Científica, com ênfase em educação não-formal de Paleontologia em Exposições, Museus e Centros de Ciência. Sua pesquisa está concentrada em ontogenia, morfometria e filogenia de répteis fósseis.
		</p>
		<p id="exposicao">
			O acesso ao áudio das apresentações poderá ser feito por meio de canal FM do rádio do veículo. Outra novidade é que o espectador deverá marcar por um app, a ser baixado previamente no celular a compra de alimentos, bebidas e souvenires.
			A experiência completa, safari + show, tem duração de 55min.
			<br><br>
			Os frequentadores do evento deverão realizar o pagamento do estacionamento conforme tempo de permanência e tabela de valores vigente.
			<br><br><br>			

			
			<strong>BAURU/SP</strong><br>
			ESTACIONAMENTO BOULEVARD SHOPPING BAURU
			<br>
			R. Marcondes Salgado, 11-39 - Chácara das Flores, Bauru - SP, 17013-113
			<br><br>
			De 09 de Dezembro a 12 de Dezembro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$140 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100
			<br><br><br>

			<strong>MANAUS/AM</strong><br>
			ESTACIONAMENTO AMAZONAS SHOPPING
			<br>
			Av. Djalma Batista, 482 - Chapada, Manaus - AM, 69050-010
			<br><br>
			De 13 de janeiro a 23 de janeiro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$120 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100
			<br><br><br>

			<strong>TERESINA/PI</strong><br>
			ESTACIONAMENTO TERESINA SHOPPING
			<br>
			Av. Raul Lopes, 1000 - Noivos, Teresina - PI, 64048-065
			<br><br>
			De 03 de Fevereiro a 06 de Fevereiro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$120 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100
			<br><br><br>

			<!-- <strong>NATAL/RN</strong><br>
			ESTACIONAMENTO PARTAGE NORTE SHOPPING NATAL
			<br>
			Av. Dr. João Medeiros Filho, 2395 -  Natal - RN, 59110-200
			<br><br>
			De 03 de fevereiro a 06 fevereiro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$120 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100
			<br><br><br> -->

			<strong>MACEIO/AL</strong><br>
			ESTACIONAMENTO PARQUE SHOPPING MACEIÓ
			<br>
			Av. Comendador Gustavo Paiva, 5945 - Cruz das Almas, Maceió - AL, 57038-000
			<br><br>
			De 10 de fevereiro a 13 fevereiro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$120 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100
			<br><br><br>

			<!-- <strong>JUIZ DE FORA/MG</strong><br>
			ESTACIONAMENTO SHOPPING JARDIM NORTE
			<br>
			Av. Brasil, 6345 - Mariano Procópio, Juiz de Fora - MG, 36080-060
			<br><br>
			De 17 de fevereiro a 20 fevereiro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$120 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100
			<br><br><br> -->

		</p>

		<div class="parceiros DesktopItem">
			<p style="text-align: center">PARCEIROS</p>
			<img class="logo-parceiros" src="<? echo $images ?>logos-parceiros-euro-semparar.png">

			<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
			<img class="logo-parceiros" src="<? echo $images ?>logos-parceiros.png">
		</div>

	</section>

	<section id="icones">
		<h1 class="DesktopItem">JURASSIC SAFARI</h1>
		<h1 class="MobileItem">JURASSIC SAFARI</h1>

		<div class="menu-locais-links">
			<a class="" local="basp">BAURU</a>
			<a class="" local="maam">MANAUS</a>
			<a class="" local="tepi">TERESINA</a>
			<!-- <a class="" local="narn">NATAL</a> -->
			<a class="" local="maal">MACEIÓ</a>
			<!-- <a class="" local="jumg">JUIZ DE FORA</a> -->
		</div>		

		<div class="local basp">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO BOULEVARD SHOPPING BAURU</h2>
					<p>R. Marcondes Salgado, 11-39 <br> Chácara das Flores, Bauru - SP, 17013-113</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>

		<div class="local maam">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO AMAZONAS SHOPPING</h2>
					<p>Av. Djalma Batista, 482 <br> Chapada, Manaus - AM, 69050-010</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>

		<div class="local tepi">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO TERESINA SHOPPING</h2>
					<p>Av. Raul Lopes, 1000 <br> Noivos, Teresina - PI, 64048-065</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>

		<div class="local narn">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO PARTAGE NORTE SHOPPING NATAL</h2>
					<p>Av. Dr. João Medeiros Filho, 2395 <br>  Natal - RN, 59110-200</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>

		<div class="local maal">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO PARQUE SHOPPING MACEIÓ</h2>
					<p>Av. Comendador Gustavo Paiva, 5945 <br> Cruz das Almas, Maceió - AL, 57038-000</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>

		<div class="local jumg">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING JARDIM NORTE</h2>
					<p>Av. Brasil, 6345 <br> Mariano Procópio, Juiz de Fora - MG, 36080-060</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div>

	</section>

	<section id="valores">
		
		
		<div class="local basp">
			<h1>VALORES - SP</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h30</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h30</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>
			</table>

			<h1>VALORES - SP</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>R$ 190,00</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>R$ 200,00</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>R$ 210,00</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>R$ 200,00</td>
				</tr>
			</table>
		</div>

		<div class="local maam">
			<h1>VALORES - AM</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h30</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h30</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>
			</table>

			<h1>VALORES - AM</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>R$ 190,00</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>R$ 200,00</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>R$ 210,00</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>R$ 200,00</td>
				</tr>
			</table>
		</div>

		<div class="local tepi">
			<h1>VALORES - PI</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h30</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h30</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>
			</table>

			<h1>VALORES - PI</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>R$ 190,00</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>R$ 200,00</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>R$ 210,00</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>R$ 200,00</td>
				</tr>
			</table>
		</div>

		<div class="local narn">
			<h1>VALORES - RN</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h30</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h30</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>
			</table>

			<h1>VALORES - RN</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>R$ 190,00</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>R$ 200,00</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>R$ 210,00</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>R$ 200,00</td>
				</tr>
			</table>
		</div>

		<div class="local maal">
			<h1>VALORES - AL</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h30</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h30</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>
			</table>

			<h1>VALORES - AL</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>R$ 190,00</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>R$ 200,00</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>R$ 210,00</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>R$ 200,00</td>
				</tr>
			</table>
		</div>

		<div class="local jumg">
			<h1>VALORES - MG</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h30</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h30</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>R$ 160,00</td>
					<td>R$ 180,00</td>
				</tr>
			</table>

			<h1>VALORES - MG</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>R$ 190,00</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>R$ 200,00</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>R$ 210,00</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>R$ 200,00</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>

		<div class="wrapper-card">
			
			
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasBASP ?>">
					<h2>Bauru</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div>

			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasMAAM ?>">
					<h2>Manaus</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div>

			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasTEPI ?>">
					<h2>Teresina</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div>

			<!-- <div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasNARN ?>">
					<h2>Natal</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div> -->

			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasMAAL ?>">
					<h2>Maceió</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div>

			<!-- <div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasJUMG ?>">
					<h2>Juiz de Fora</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div> -->
		</div>



		<div class="ingressostxt">
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