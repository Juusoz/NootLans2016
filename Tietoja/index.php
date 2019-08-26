<!--
	Tietoja
		Page created by:
		Juuso Saesvuo
-->
<html>
<head>
<title>NootLANS 2016</title>
<link rel="shortcut icon" href="../kuvat/noot noot.png" />

<meta charset="utf-8">

<link rel='stylesheet' type='text/css' href='../style.css?<?php echo time(); ?>'>
<script type="text/javascript" src="../scripts.js?<?php echo time(); ?>"></script>
<script src="../scripts.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script>KonamiCode();</script>
<?php require('../yhteys.php'); ?>
</head>

<body>

<img src="../kuvat/titlePhoto.png" class="titlePhoto">

	<div class="navBar">
	<ul class="navbar">
		  <li class="navbar"><a href="../">Etusivu</a></li>
		  <li class="navbar"><a href="../varaa">Varaa paikka</a></li>
		  <li class="navbar"><a class="active" href="../tietoja">Tietoja</a></li>
		  <li class="navbar"><a href="../turnaukset">Turnaukset</a></li>
		  <li class="navbar"><a href="../otayhteytta">Ota yhteyttä</a></li>
		  <li class="navbar" style="float: right"><a href="../saannot">Säännöt</a></li>
		</ul>
	</div>

	<div id="main">
		<div class="tekstialue">
			<h3>Nootlans 2016 on Tredun Sammonkadun toimipisteen Tieto- ja viestintätekniikan kolmannen vuoden opiskelijoiden vuosittain järjestämä verkkopelitapahtuma. Tapahtuman nimi vaihtuu aina hieman joka vuosi jonka johdosta nimi saattaa kuulostaa tutulta.</h3>

			<p>Tapahtuma alkaa 2.12.2016 klo. 18 ja jatkuu seuraavan päivän iltapäivälle asti. Tapahtumaan on hyvä varata ruokaa, eväitä ja nukkumatarpeet mukaan. Tapahtumapaikan lähellä on vuorokauden ympäri auki oleva McDonald's ravintola sekä S-market ja Prisma.</p>

			<p>Tapahtumassa järjestetään Overwatch, Counter-Strike : Global Offensive, League of Legends ja Hearthstone turnaukset. Turnauksiin osallistuminen järjestetään challonge.com verkkosivulla. Linkit turnausten osallistumisiin lisätään myöhemmin.</p>
			
			<p>Alaikäiset tapahtumaan osallistujat tarvitsevat vanhempiensa allekirjoittaman <a href="../muuta/lupalappu.doc" download="Alaikäisen lupalappu.doc">lupalapun</a> päästäkseen sisälle tapahtuma-alueelle.</p>

			<div id="map"></div>
			<script>
			  function initMap() {
				var Sammonkadun_ammattiopisto = {lat: 61.494741, lng: 23.816675};
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 16,
				  center: Sammonkadun_ammattiopisto
				});
				var marker = new google.maps.Marker({
				  position: Sammonkadun_ammattiopisto,
				  map: map
				});
			  }
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwwZXefuQRxrTZoKYi6zDMokvhuU98JxE&callback=initMap"></script>
		</div>
	</div>
	
</body>