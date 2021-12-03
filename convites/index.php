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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id= " height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

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
		<a class="Btn-primary" href="#ingressos">Reservar ingressos</a>
		<!-- <a class="Btn-secondary" href="" data-lity>Assistir o vídeo</a>-->
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

			<!-- <strong>BRASÍLIA/DF</strong><br>
			ARENA BSB<br>
			Estacionamento do Ginásio Nilson Nelson.
			<br><br>
			De 15 de Maio a 13 de Junho. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$140 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 5<br>
			Quantidade de carros - 100

			<br><br><br>

			<strong>PORTO ALEGRE/RS</strong><br>
			BARRA SHOPPING SUL<br>
			Av. Diário de Notícias, 300 - Cristal, Porto Alegre - RS, 90810-080
			<br><br>
			De 22 de Maio a 13 de Junho. Sessões:
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

			<strong>GOIÂNIA/GO</strong><br>
			Estacionamento do Flamboyant Shopping Center, Goiânia<br>
			Av. Dep. Jamel Cecílio, 3300 - Jardim Goiás, Goiânia - GO, 74810-907
			<br><br>
			Abertura 17 a 20 de Junho. Sessões:
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

			<strong>GRANDE FLORIANÓPOLIS/SC</strong><br>
			Estacionamento Shopping Itaguaçu<br>
			R. Gerôncio Thives, 1079 - Barreiros, São José - SC, 88117-292
			<br><br>
			De 17 a 20 de Junho. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$140 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100

			<br><br><br> -->

			<!-- <strong>SÃO PAULO/SP</strong><br>
			ESTACIONAMENTO MOOCA PLAZA SHOPPING<br>
			R. Cap. Pacheco e Chaves, 313 - Vila Prudente, São Paulo - SP, 03126-000
			<br><br>
			De 26 de Junho a 18 de Julho. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h15<br>
			Sextas-feiras – 19h00 e 20h15<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$140 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100

			<br><br><br> -->

			<!-- <strong>BELO HORIZONTE/MG</strong><br>
			ESTACIONAMENTO ESTADIO MINEIRÃO<br>
			Av. Antônio Abrahão Caram, 1001 - São José, Belo Horizonte - MG, 31275-000
			<br><br>
			De 26 de Junho a 18 de Julho. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$140 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100

			<br><br><br> -->

			<strong>RIO DE JANEIRO/RJ</strong><br>
			VIA PARQUE SHOPPING<br>
			Av. Ayrton Senna, 3000 - Barra da Tijuca, Rio de Janeiro - RJ, 22775-904
			<br><br>
			Estreia de 30 de Julho a 08 de Agosto
			<br><br>
			Quintas-feiras – 18h30 e 20h<br>
			Sextas-feiras – 18h30 / 20h<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$120 e R$180 por veículo<br>
			Quantidade máxima de pessoas por carro - 5<br>
			Quantidade de carros - 100

			<br><br><br>

			<strong>CURITIBA/PR</strong><br>
			ESTACIONAMENTO RESTAURANTE FAMÍLIA MADALOSSO<br>
			Av. Manoel Ribas, 5875 – Santa Felicidade - Curitiba, PR - CEP 06321-190
			<br><br>
			De 07 de Agosto a 29 de Agosto. Sessões:
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

			<strong>VITORIA/ES</strong><br>
			SHOPPING VITÓRIA
			<br>
			Av. Américo Buaiz, 200 - A 15 - Enseada do Suá, Vitória - ES, 29050-902
			<br><br>
			De 02 de Setembro a 05 de Setembro. Sessões:
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

			<!-- <strong>SOROCABA/SP</strong><br>
			ESTACIONAMENTO SHOPPING IGUATEMI ESPLANADA
			<br>
			Entrada Ala Sul - Av. Gisele Constantino, 1.850 - Votorantim – SP
			<br><br>
			De 09 de setembro a 12 setembro. Sessões:
			<br><br>
			Quintas-feiras – 19h00 e 20h30<br>
			Sextas-feiras – 19h00 e 20h30<br>
			Sábados – 11h30, 14h30, 17h30 e 19h<br>
			Domingos – 11h30, 14h30, 17h30 e 19h
			<br><br>
			Valor do ingresso entre R$140 e R$210 por veículo<br>
			Quantidade máxima de pessoas por carro - 4<br>
			Quantidade de carros - 100

			<br><br><br> -->

			<strong>ARACAJU/SE</strong><br>
			ESTACIONAMENTO SHOPPING JARDINS
			<br>
			Avenida Ministro Geraldo Barreto Sobra, 215l, 215 - Jardins, Aracaju - SE, 49026-010
			<br><br>
			De 30 de setembro a 03 outubro. Sessões:
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

			<strong>SALVADOR/BA</strong><br>
			ESTACIONAMENTO SHOPPING DA BAHIA
			<br>
			Av. Tancredo Neves, 148, Caminho das Árvores - Salvador - Bahia - CEP 41820-020
			<br><br>
			De 11 de Setembro a 29 de Setembro. Sessões:
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

			<strong>RECIFE/PE</strong><br>
			ESTACIONAMENTO SHOPPING RECIFE
			<br>
			R. Padre Carapuceiro, 777 - Boa Viagem, Recife - PE, 51020-900
			<br><br>
			De 21 de Outubro a 24 de Outubro. Sessões:
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

		</p>

		<p style="text-align: center">PARCEIROS</p>
		<img class="logo-parceiros" src="<? echo $images ?>logos-parceiros-euro-semparar.png">

		<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
		<img class="logo-parceiros" src="<? echo $images ?>logos-parceiros.png">

	</section>

	<section id="icones">
		<h1 class="DesktopItem">JURASSIC SAFARI</h1>
		<h1 class="MobileItem">JURASSIC SAFARI</h1>
		<!-- <h3>Rio de Janeiro</h3> -->

		<div class="menu-locais-links">
			<!-- <a class="" local="df">BRASÍLIA</a> -->
			<a class="" local="pr">CURITIBA</a>
			<!-- <a class="active" local="sc">GDE FLORIANÓPOLIS</a> -->
			<!-- <a class="" local="go">GOIÂNIA</a> -->
			<!-- <a class="" local="mg">MINAS GERAIS</a> -->
			<a class="" local="rj">RIO DE JANEIRO</a>
			<a class="" local="es">VITÓRIA</a>
		</div>

		<div class="menu-locais-links">
			<!-- <a class="" local="sp">SÃO PAULO</a> -->
			<!-- <a class="" local="rs">PORTO ALEGRE</a> -->
			<a class="" local="ba">SALVADOR</a>
			<a class="active" local="pe">RECIFE</a>
			<a class="" local="se">ARACAJU</a>
			<!-- <a class="" local="ssp">SOROCABA</a> -->
		</div>

		<div class="local rj">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO C<br>VIA PARQUE SHOPPING </h2>
					<p>Av. Ayrton Senna, 3000<br>Barra da Tijuca, Rio de Janeiro – RJ</p>
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

		<div class="local pr">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO RESTAURANTE FAMÍLIA MADALOSSO </h2>
					<p>Av. Manoel Ribas, 5875<br> Santa Felicidade - Curitiba, PR</p>
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

		<div class="local rs">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>BARRA SHOPPING SUL </h2>
					<p>Av. Diário de Notícias, 300<br> Cristal - Porto Alegre, RS</p>
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

		<div class="local df">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO DO GINÁSIO NILSON NELSON </h2>
					<p>Eixo Monumental - SRPN, Brasília/DF</p>
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

		<div class="local go">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO DO FLAMBOYANT SHOPPING CENTER </h2>
					<p>Av. Dep. Jamel Cecílio, 3300 - Jardim Goiás, Goiânia - GO</p>
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


		<div class="local sc">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING ITAGUAÇU</h2>
					<p>R. Gerôncio Thives, 1079 - Barreiros, São José - SC</p>
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

		<!-- <div class="local sp ">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO MOOCA PLAZA SHOPPING</h2>
					<p>R. Cap. Pacheco e Chaves, 313<br> Vila Prudente, São Paulo - SP, 03126-000</p>
				</div>
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon03.png">
					</div>
					<h2>DURAÇÃO - 55min</h2>
					<p>Recomendamos a chegada 40 minutos antes<br> para desfrutarem da área interativa.</p>
				</div>
			</div>
		</div> -->

		<div class="local mg">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO G3 ESTADIO MINEIRÃO</h2>
					<p>Av. Antônio Abrahão Caram, 1001 - São José, Belo Horizonte - MG, 31275-000</p>
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

		<div class="local es">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING VITÓRIA</h2>
					<p>Av. Américo Buaiz, 200 - A 15 <br> Enseada do Suá, Vitória - ES, 29050-902</p>
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

		<div class="local ba active">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING DA BAHIA</h2>
					<p>Av. Tancredo Neves, 148, Caminho das Árvores <br>Salvador - Bahia - CEP 41820-020</p>
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

		<div class="local pe">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING RECIFE</h2>
					<p>R. Padre Carapuceiro, 777 <br> Boa Viagem, Recife PE, 51020-900</p>
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

		<div class="local se">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING JARDINS</h2>
					<p>Avenida Ministro Geraldo Barreto Sobra, 215l, 215 <br>Jardins, Aracaju - SE, 49026-010</p>
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

		<div class="local ssp">
			<div class="wrapper-card">
				<div class="card">
					<div class="img-wrapper">
						<img src="<? echo $images ?>icon02.png">
					</div>
					<h2>ESTACIONAMENTO SHOPPING IGUATEMI ESPLANADA</h2>
					<p>Entrada Ala Sul - Av. Gisele Constantino, 1.850 <br> Votorantim – SP</p>
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
		<div class="local rj">
			<h1>VALORES - RJ</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - RJ</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local pr">
			<h1>VALORES - PR</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - PR</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local rs">
			<h1>VALORES - RS</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - RS</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local df">
			<h1>VALORES - DF</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - DF</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local go">
			<h1>VALORES - GO</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - GO</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local sc">
			<h1>VALORES - SC</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - SC</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<!-- <div class="local sp">
			<h1>VALORES - SP</h1>
			<h2 class="DesktopItem">Quinta e Sexta - 19h / 20h15</h2>
			<h2 class="MobileItem">Quinta e Sexta - 19h / 20h15</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">QUI</td>
					<td class="first">SEX</td>
				</tr>

				<tr>
					<td>19h</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h15</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
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
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div> -->

		<div class="local mg">
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
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
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local es">
			<h1>VALORES - ES</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - ES</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local ba">
			<h1>VALORES - BA</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - BA</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local pe active">
			<h1>VALORES - PE</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - PE</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local se">
			<h1>VALORES - SE</h1>
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>
			</table>

			<h1>VALORES - SE</h1>
			<h2 class="DesktopItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<h2 class="MobileItem">Sábados e Domingos - 11h30 / 14h30 / 17h30 / 19h</h2>
			<table>
				<tr>
					<td class="first">HORÁRIO</td>
					<td class="first">SÁB/DOM</td>
				</tr>

				<tr>
					<td>11h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>

		<div class="local ssp">
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
					<td>Gratuito</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>20h30</td>
					<td>Gratuito</td>
					<td>Gratuito</td>
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
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>14h30</td>
					<td>Gratuito</td>
				</tr>

				<tr>
					<td>17h30</td>

					<td>Gratuito</td>
				</tr>

				<tr>
					<td>19h00</td>

					<td>Gratuito</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="ingressos">
		<h1 class="">INGRESSOS</h1>
		<div class="wrapper-card ">

			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendas ?>">
					<h2>Fortaleza</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div>
			<div class="card">
				<a onclick="pixel()" class="Btn" href="<? echo $siteVendasGO ?>">
					<h2>Goiânia</h2>
					<p>
						(até 4 pessoas no carro independente da idade)<br>
					</p>
				</a>
			</div>

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

	<script type="text/javascript">
		$('.LinkMenu:eq(0)').addClass('SessaoAtual');
	</script>
</body>

</html>