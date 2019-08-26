<!--
	Varaa
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
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script>KonamiCode();</script>
<?php 
//Shows error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('../yhteys.php'); 
require "../tkfunktiot.php";
?>
</head>

<body>

<div class="paikkaTiedot" id="paikkaTiedot"><h3 id="hoverDivText"></h3></div> <!--HoverDiv-->

<img src="../kuvat/titlePhoto.png" class="titlePhoto">

	<div class="navBar">
	<ul class="navbar">
		  <li class="navbar"><a href="../">Etusivu</a></li>
		  <li class="navbar"><a class="active" href="./">Varaa paikka</a></li>
		  <li class="navbar"><a href="../tietoja">Tietoja</a></li>
		  <li class="navbar"><a href="../turnaukset">Turnaukset</a></li>
		  <li class="navbar"><a href="../otayhteytta">Ota yhteyttä</a></li>
		  <li class="navbar" style="float: right"><a href="../saannot">Säännöt</a></li>
		</ul>
	</div>

	
	<div id="main">
		
		<!------------------Paikan varaus----------------->
		
		<div class="SaliVaraus">
			<div class="PoytaSuora1">
				<table class="poytarivi1">
					<tr>
						<th><div class="poyta" id="1" onclick="seatSelected('1')"></div></th>
						<th><div class="poyta" id="2" onclick="seatSelected('2')"></div></th>
						<th><div class="poyta" id="3" onclick="seatSelected('3')"></div></th>
						<th><div class="poyta" id="4" onclick="seatSelected('4')"></div></th>
						<th><div class="poyta" id="5" onclick="seatSelected('5')"></div></th>
						<th><div class="poyta" id="6" onclick="seatSelected('6')"></div></th>
						<th><div class="poyta" id="7" onclick="seatSelected('7')"></div></th>
						<th><div class="poyta" id="8" onclick="seatSelected('8')"></div></th>
						<th><div class="poyta" id="9" onclick="seatSelected('9')"></div></th>
						<th><div class="poyta" id="10" onclick="seatSelected('10')"></div></th>
					</tr>
					<tr>
						<th><div class="poyta" id="11" onclick="seatSelected('11')"></div></th>
						<th><div class="poyta" id="12" onclick="seatSelected('12')"></div></th>
						<th><div class="poyta" id="13" onclick="seatSelected('13')"></div></th>
						<th><div class="poyta" id="14" onclick="seatSelected('14')"></div></th>
						<th><div class="poyta" id="15" onclick="seatSelected('15')"></div></th>
						<th><div class="poyta" id="16" onclick="seatSelected('16')"></div></th>
						<th><div class="poyta" id="17" onclick="seatSelected('17')"></div></th>
						<th><div class="poyta" id="18" onclick="seatSelected('18')"></div></th>
						<th><div class="poyta" id="19" onclick="seatSelected('19')"></div></th>
						<th><div class="poyta" id="20" onclick="seatSelected('20')"></div></th>
					</tr>
				</table>
				
				<table class="poytarivi2">
					<tr>
						<th><div class="poyta" id="21" onclick="seatSelected('21')"></div></th>
						<th><div class="poyta" id="22" onclick="seatSelected('22')"></div></th>
						<th><div class="poyta" id="23" onclick="seatSelected('23')"></div></th>
						<th><div class="poyta" id="24" onclick="seatSelected('24')"></div></th>
						<th><div class="poyta" id="25" onclick="seatSelected('25')"></div></th>
						<th><div class="poyta" id="26" onclick="seatSelected('26')"></div></th>
						<th><div class="poyta" id="27" onclick="seatSelected('27')"></div></th>
						<th><div class="poyta" id="28" onclick="seatSelected('28')"></div></th>
						<th><div class="poyta" id="29" onclick="seatSelected('29')"></div></th>
						<th><div class="poyta" id="30" onclick="seatSelected('30')"></div></th>
					</tr>
					<tr>
						<th><div class="poyta" id="31" onclick="seatSelected('31')"></div></th>
						<th><div class="poyta" id="32" onclick="seatSelected('32')"></div></th>
						<th><div class="poyta" id="33" onclick="seatSelected('33')"></div></th>
						<th><div class="poyta" id="34" onclick="seatSelected('34')"></div></th>
						<th><div class="poyta" id="35" onclick="seatSelected('35')"></div></th>
						<th><div class="poyta" id="36" onclick="seatSelected('36')"></div></th>
						<th><div class="poyta" id="37" onclick="seatSelected('37')"></div></th>
						<th><div class="poyta" id="38" onclick="seatSelected('38')"></div></th>
						<th><div class="poyta" id="39" onclick="seatSelected('39')"></div></th>
						<th><div class="poyta" id="40" onclick="seatSelected('40')"></div></th>
					</tr>
				</table>
			</div>
			<div class="PoytaSuora2">
				<table class="poytarivi3">
						<tr>
						<th><div class="poyta" id="41" onclick="seatSelected('41')"></div></th>
						<th><div class="poyta" id="42" onclick="seatSelected('42')"></div></th>
						<th><div class="poyta" id="43" onclick="seatSelected('43')"></div></th>
						<th><div class="poyta" id="44" onclick="seatSelected('44')"></div></th>
						<th><div class="poyta" id="45" onclick="seatSelected('45')"></div></th>
						<th><div class="poyta" id="46" onclick="seatSelected('46')"></div></th>
						<th><div class="poyta" id="47" onclick="seatSelected('47')"></div></th>
						<th><div class="poyta" id="48" onclick="seatSelected('48')"></div></th>
						<th><div class="poyta" id="49" onclick="seatSelected('49')"></div></th>
						<th><div class="poyta" id="50" onclick="seatSelected('50')"></div></th>
					</tr>
					<tr>
						<th><div class="poyta" id="51" onclick="seatSelected('51')"></div></th>
						<th><div class="poyta" id="52" onclick="seatSelected('52')"></div></th>
						<th><div class="poyta" id="53" onclick="seatSelected('53')"></div></th>
						<th><div class="poyta" id="54" onclick="seatSelected('54')"></div></th>
						<th><div class="poyta" id="55" onclick="seatSelected('55')"></div></th>
						<th><div class="poyta" id="56" onclick="seatSelected('56')"></div></th>
						<th><div class="poyta" id="57" onclick="seatSelected('57')"></div></th>
						<th><div class="poyta" id="58" onclick="seatSelected('58')"></div></th>
						<th><div class="poyta" id="59" onclick="seatSelected('59')"></div></th>
						<th><div class="poyta" id="60" onclick="seatSelected('60')"></div></th>
					</tr>
				</table>
			</div>
			<div class="PoytaSuora3">
				<table class="poytarivi4">
					<tr>
						<th><div class="poyta" id="61" onclick="seatSelected('61')"></div></th>
						<th><div class="poyta" id="62" onclick="seatSelected('62')"></div></th>
						<th><div class="poyta" id="63" onclick="seatSelected('63')"></div></th>
						<th><div class="poyta" id="64" onclick="seatSelected('64')"></div></th>
						<th><div class="poyta" id="65" onclick="seatSelected('65')"></div></th>
						<th><div class="poyta" id="66" onclick="seatSelected('66')"></div></th>
						<th><div class="poyta" id="67" onclick="seatSelected('67')"></div></th>
						<th><div class="poyta" id="68" onclick="seatSelected('68')"></div></th>
						<th><div class="poyta" id="69" onclick="seatSelected('69')"></div></th>
						<th><div class="poyta" id="70" onclick="seatSelected('70')"></div></th>
					</tr>
					<tr>
						<th><div class="poyta" id="71" onclick="seatSelected('71')"></div></th>
						<th><div class="poyta" id="72" onclick="seatSelected('72')"></div></th>
						<th><div class="poyta" id="73" onclick="seatSelected('73')"></div></th>
						<th><div class="poyta" id="74" onclick="seatSelected('74')"></div></th>
						<th><div class="poyta" id="75" onclick="seatSelected('75')"></div></th>
						<th><div class="poyta" id="76" onclick="seatSelected('76')"></div></th>
						<th><div class="poyta" id="77" onclick="seatSelected('77')"></div></th>
						<th><div class="poyta" id="78" onclick="seatSelected('78')"></div></th>
						<th><div class="poyta" id="79" onclick="seatSelected('79')"></div></th>
						<th><div class="poyta" id="80" onclick="seatSelected('80')"></div></th>
					</tr>
				</table>
			
				<table class="poytarivi5">
					<tr>
						<th><div class="poyta" id="81" onclick="seatSelected('81')"></div></th>
						<th><div class="poyta" id="82" onclick="seatSelected('82')"></div></th>
						<th><div class="poyta" id="83" onclick="seatSelected('83')"></div></th>
						<th><div class="poyta" id="84" onclick="seatSelected('84')"></div></th>
						<th><div class="poyta" id="85" onclick="seatSelected('85')"></div></th>
						<th><div class="poyta" id="86" onclick="seatSelected('86')"></div></th>
						<th><div class="poyta" id="87" onclick="seatSelected('87')"></div></th>
						<th><div class="poyta" id="88" onclick="seatSelected('88')"></div></th>
						<th><div class="poyta" id="89" onclick="seatSelected('89')"></div></th>
						<th><div class="poyta" id="90" onclick="seatSelected('90')"></div></th>
					</tr>
					<tr>
						<th><div class="poyta" id="91" onclick="seatSelected('91')"></div></th>
						<th><div class="poyta" id="92" onclick="seatSelected('92')"></div></th>
						<th><div class="poyta" id="93" onclick="seatSelected('93')"></div></th>
						<th><div class="poyta" id="94" onclick="seatSelected('94')"></div></th>
						<th><div class="poyta" id="95" onclick="seatSelected('95')"></div></th>
						<th><div class="poyta" id="96" onclick="seatSelected('96')"></div></th>
						<th><div class="poyta" id="97" onclick="seatSelected('97')"></div></th>
						<th><div class="poyta" id="98" onclick="seatSelected('98')"></div></th>
						<th><div class="poyta" id="99" onclick="seatSelected('99')"></div></th>
						<th><div class="poyta" id="100" onclick="seatSelected('100')"></div></th>
					</tr>
				</table>
		</div>
<!---------------Laittaa varatut paikat ja säätää hoverdivit------------------>
<script>
		<?php
		$sql = "SELECT * FROM varaus";
		foreach($yhteys->query($sql) as $PoytaId)
		{ 
		echo "document.getElementById(". $PoytaId["PoytaId"].").className = 'poyta varattu'; ";
		echo "document.getElementById(". $PoytaId["PoytaId"].").onmouseover= function(){ hoverdiv(event,'". $PoytaId["PoytaId"] ."') }; ";
		echo "document.getElementById(". $PoytaId["PoytaId"].").onmouseout = function(){ hoverdiv(event,'". $PoytaId["PoytaId"] ."') }; ";
		echo "</script><input type='hidden' value= '". $PoytaId["Etunimi"] ." ". $PoytaId["Sukunimi"] ."' id='". $PoytaId["PoytaId"] ."Tiedot'><script>";
		}
		?>
</script>
	
		</div>
		
		<!--------------------Next Button----------------------->
		<button type="submit" onclick="getPoytaId()" class="Button">Seuraava</button>
		<p id="valitsePoytaError" class="errorMessage" name="valitsePoytaError"></p>

	</div>

</body>