<?php
/*Tarkistaa että pöytää ei ole jo kannassa*/

function poytaId_ei_kannassa($yhteys,$poytaId)
{
	$sql ="SELECT * FROM varaus WHERE poytaId =?";
	$lause= $yhteys->prepare($sql);
	$lause->execute(array($poytaId));
	
	$rivimaara = $lause->rowCount();
	
	if($rivimaara==0) return true;
	else return false;

}
/*Tarkistaa että sähköposti ei ole jo kannassa*/
function sahkoposti_ei_kannassa($yhteys,$sahkoposti)
{
	$sql ="SELECT * FROM varaus WHERE Sahkoposti = ?";
	$lause= $yhteys->prepare($sql);
	$lause->execute(array($sahkoposti));
	
	$rivimaara = $lause->rowCount();
	
	if($rivimaara==0){
		return true;
	}
	else{
		return false;
	}

}

/* Tekee satunnaisen koodin */
function cCodeGenerator($length = 40) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvxyz0123456789'; //133 duovigintiljoonaa (eli 133674945388437340678388459765760000000000000000000000000000000000000000) eri mahdollista koodiyhdistelmää. Sinulla on isommat mahdollisuudet voittaa Eurojackpotissa joka viikko 918307051147661640506761846153846153846153846153846153846 vuoden ajan.
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/*Tarkistaa että koodi on kannassa*/
function koodi_kannassa($yhteys,$cCode)
{
	$sql ="SELECT ConfirmationCode FROM pending WHERE ConfirmationCode = ?";
	$lause= $yhteys->prepare($sql);
	$lause->execute(array($cCode));
	
	$rivimaara = $lause->rowCount();
	
	if($rivimaara==1){
		return true;
	}
	else{
		return false;
	}
}

/*Tarkistaa että satunnaista koodia ei ole jo varmistettu*/
function cCode_on_kaytetty($yhteys,$cCode)
{
	$sql ="SELECT ConfirmationCode FROM varaus WHERE ConfirmationCode = ?";
	$lause= $yhteys->prepare($sql);
	$lause->execute(array($cCode));
	
	$rivimaara = $lause->rowCount();
	
	if($rivimaara==1){
		return true;
		
	}
	else{
		return false;
		
	}

}

/* Tarkistaa, että nimessä ei ole numeroita tai muita epämääräisiä symboleita */
function etunimiValidate($etunimi){
	if (!preg_match("/^[a-zA-Z åäöÅÄÖ-]*$/",$etunimi)) { //Tarkistaa, että kirjainsarja ei sisällä muuta kuin a-z, å, ä, ö, välilyöntiä tai yhdysviivaa
		echo"Vain kirjaimet A-Ö, välilyönnit ja yhdysviivat ovat sallittuja."; 
		return false;
	}
	else return true;
}

function sukunimiValidate($sukunimi){
	if (!preg_match("/^[a-zA-Z åäöÅÄÖ-]*$/",$sukunimi)) { //Tarkistaa, että kirjainsarja ei sisällä muuta kuin a-z, å, ä, ö, välilyöntiä tai yhdysviivaa
		echo"Vain kirjaimet A-Ö, välilyönnit ja yhdysviivat ovat sallittuja."; 
		return false;
	}
	else return true;
}

/* Tarkistaa, että sähköpostiosoite on oikean laatuinen */
function emailValidate($sahkoposti){
	if (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
		echo "Sähköpostiosoite ei käy."; 
		return false;
	}
	else return true;
}



?>