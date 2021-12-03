<!--
		Hello, guys!! :)

		Todo o site foi desenvolvido pela bs.agency em 2020. 
		Façam bom uso!
-->
<?php
	$empresa = 'JURASSIC SAFARI';
	$CNPJ = '00.000.000/0001-00';
	$url = 'http://localhost/jurassicsafari/';
	// $url = 'https://www.jurassicsafari.com.br/';
	$images = $url.'assets/images/';
	$Tags = '';
	

	// Alt Title 
		$CompartilhamentoAltTitle = '';
		$HomeAltTitle = '';
		$SobreAltTitle = '';
		$ContatoAltTitle = '';

	// Social
		$facebookPage = 'jurassicsafaribr';
		$facebookid = '';
		$instagram = 'jurassicsafaribr/';
		$youtube = '';

	// Comprar Ingressos novos
		// $siteVendas 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=135&websaleschannelkey=internet-sem-taxa&orig=jsesp';		
		// $siteVendasRJ 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=74&filter=day&websaleschannelkey=internet-sem-taxa&orig=jserj';
		// $siteVendasPR 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=115&filter=day&websaleschannelkey=internet-sem-taxa&orig=jsepr';
		// $siteVendasRS 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=124&websaleschannelkey=internet-sem-taxa&orig=jsers';
		// $siteVendasDF 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=126&websaleschannelkey=internet-sem-taxa&orig=jsedf';
		// $siteVendasGO 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=134&websaleschannelkey=internet-sem-taxa&orig=jsego';
		// $siteVendasSC 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=137&websaleschannelkey=internet-sem-taxa&orig=jsesc';		
		// $siteVendasMG 		= 'https://olhaoingresso.showare.com.br/Default.aspx?display=list&eventid=138&websaleschannelkey=internet-sem-taxa&orig=jsemg&trk_eventId=138';
		// $siteVendasES 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=171&filter=day&websaleschannelkey=internet-sem-taxa&orig=jsees';
		// $siteVendasBA 		= 'https://bileto.sympla.com.br/event/68432/d/104689';
		// $siteVendasPE 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=180&filter=day&websaleschannelkey=internet-sem-taxa&orig=jsepe';
		// $siteVendasSE 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=191&filter=day&websaleschannelkey=internet-sem-taxa&orig=jsese';
		// $siteVendasSSP 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=188&filter=day&websaleschannelkey=internet-sem-taxa&orig=jsesorocaba';
		// $siteVendasSJSP		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?eventid=193&filter=day&websaleschannelkey=internet-sem-taxa&orig=jsesjc';		
		// $siteVendasSBCSP	= '';
		// $siteVendasUBMG 	= '';

	// Comprar Ingressos antigos
		$siteVendasRJ 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=74&websaleschannelkey=internet-sem-taxa&orig=jserj';
		$siteVendasPR 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=115&websaleschannelkey=internet-sem-taxa&orig=jsepr';		
		$siteVendasDF 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=160&websaleschannelkey=internet-sem-taxa&orig=vmadf';		
		$siteVendasES 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=171&websaleschannelkey=internet-sem-taxa&orig=jsees';
		$siteVendasBA 		= 'https://bileto.sympla.com.br/event/68432/d/104689';
		$siteVendasPE 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=180&websaleschannelkey=internet-sem-taxa&orig=jsepe';
		$siteVendasSE 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=191&websaleschannelkey=internet-sem-taxa&orig=jsese';
		$siteVendasSSP 		= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=188&websaleschannelkey=internet-sem-taxa&orig=jsesorocaba';
		$siteVendasSJSP 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=193&websaleschannelkey=internet-sem-taxa&orig=jsesjc';		
		$siteVendasSBCSP 	= 'https://olhaoingresso.showare.com.br/Default.aspx?display=list&eventid=195&websaleschannelkey=internet-sem-taxa&orig=jsesbc';
		$siteVendasUBMG 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=196&websaleschannelkey=internet-sem-taxa&orig=jseuberlandia';
		$siteVendasCASP 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=199&websaleschannelkey=internet-sem-taxa&orig=jsecampinas';
		$siteVendasRPSP 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=204&websaleschannelkey=internet-sem-taxa&orig=jseribeirao';
		$siteVendasGOGO 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=211&websaleschannelkey=internet-sem-taxa&orig=jsego';
		$siteVendasFOCE 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=210&websaleschannelkey=internet-sem-taxa&orig=jsece';
		$siteVendasCUMT 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=212&websaleschannelkey=internet-sem-taxa&orig=jsemt';
		$siteVendasCGMS 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=214&websaleschannelkey=internet-sem-taxa&orig=jsems';
		$siteVendasSLMA 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=219&websaleschannelkey=internet-sem-taxa&orig=jsema';
		$siteVendasBEPA 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=220&websaleschannelkey=internet-sem-taxa&orig=jsepa';
		$siteVendasLOPR 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=226&websaleschannelkey=internet-sem-taxa&orig=jselondrina';
		$siteVendasBASP 	= 'https://olhaoingresso.showare.com.br/Performance/ShoWareFrontEndPerPerformance.aspx?display=list&eventid=225&websaleschannelkey=internet-sem-taxa&orig=jsebauru';
?>