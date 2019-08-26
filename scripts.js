var PreviousSelection = "";
var SelectedPoytaId = 0;

function seatSelected(poytaId)
{
	if(PreviousSelection != "" & document.getElementById(poytaId).className != "poyta varattu") //Tarkistaa onko ennestään valittua pöytää ja onko uusi pöytä jo varattu ennen vanhan poistamista
	{
		document.getElementById(PreviousSelection).className = "poyta";
	}
	
	if(document.getElementById(poytaId).className != "poyta varattu") //Tarkistaa onko valittu pöytä jo varattu
	{	
		document.getElementById(poytaId).className = "poyta valittu";
		PreviousSelection = poytaId;
		SelectedPoytaId = poytaId;
	}
}

function hoverdiv(e,divid)
{ 
//---------Seuraa liikettä---------//
$(document).mousemove(function(e){ //Käynnistyy kun hiiri liikkuu
    $("#paikkaTiedot").css({left:e.pageX + 20, top:e.pageY - 40}); //Seuraa hiirtä
});
//--------Näyttää tai piilottaa divin----------//
	$("#paikkaTiedot").toggle();
	var divText = $("#"+divid +"Tiedot").val(); //Hakee nimen
	$("#hoverDivText").text(divText); //Näyttää nimen
	return false;
	
}

//------------Hakee pöytäId:n-------------//
function getPoytaId()
{
	if(SelectedPoytaId != 0)
	{
		window.location.href = "./tiedot/index.php?poytaId=" + SelectedPoytaId;
	}
	else
	{
		//Näyttää errorin jos pöytää ei ole valittuna
		document.getElementById("valitsePoytaError").innerHTML = "Valitse ensin paikka!";
		$("#valitsePoytaError").stop(true, true).fadeIn(50).fadeOut(2000);
	}
}

//------------Tarkistaa, että kaikki kentät on täytetty ennen lähetystä-----------------//
function tarkistaKentat()
{
	if(document.getElementById("etunimi").value != "" && //Tarkistaa, että kaikki kentät on täytetty
	document.getElementById("sukunimi").value != "" && 
	document.getElementById("sahkoposti").value != "" && 
	document.getElementById("saannotLuettu").checked &&
	reCaptchaCallBack() == true)
	{
		document.lahetaTiedot.submit(); //Lähettää tiedot
	}
	else
	{
		if(document.getElementById("etunimi").value == ""){				//Näyttää errorin jos etunimi ei ole täytettynä
			document.getElementById("errorEtunimi").innerHTML = "Täytä tämä kenttä";
			$("#errorEtunimi").stop(true, true).fadeIn(50).fadeOut(3000);
		}
		if(document.getElementById("sukunimi").value == ""){			//Näyttää errorin jos sukunimi ei ole täytettynä
			document.getElementById("errorSukunimi").innerHTML = "Täytä tämä kenttä";
			$("#errorSukunimi").stop(true, true).fadeIn(50).fadeOut(3000);
		}
		if(document.getElementById("sahkoposti").value == ""){			//Näyttää errorin jos sähköposti ei ole täytettynä
			document.getElementById("errorSahkoposti").innerHTML = "Täytä tämä kenttä";
			$("#errorSahkoposti").stop(true, true).fadeIn(50).fadeOut(3000);
		}
		if(document.getElementById("saannotLuettu").checked == false){	//Näyttää errorin jos checkbox ei ole merkattuna
			document.getElementById("errorCheckbox").innerHTML = "Sinun täytyy hyväksyä tapahtuman säännöt";
			$("#errorCheckbox").stop(true, true).fadeIn(50).fadeOut(4000);
		}
		if(reCaptchaCallBack() == false){								//Näyttää errorin jos reCaptcha ei ole merkattuna
			document.getElementById("errorCaptcha").innerHTML = "Todista, että et ole robotti";
			$("#errorCaptcha").stop(true, true).fadeIn(50).fadeOut(4000);
		}
	}
}

//--------------------Tarkistaa onko reCaptcha rastitettu------------//
function reCaptchaCallBack()
{
	var response = grecaptcha.getResponse();
	if(response.length == 0)
	{
		return false;
	}
	else
	{
		return true;
	}
}

//---------------Just an easter egg passing through------------------//
function KonamiCode()
{
	var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";

	$(document).keydown(function(e) {
		
		kkeys.push( e.keyCode );
		
		if ( kkeys.toString().indexOf( konami ) >= 0 )
		{
		$(document).unbind('keydown',arguments.callee);
			var img = document.createElement("img");
			img.src = "http://nootlans2016.truudeli12.net/kuvat/Konami.gif";
			img.id ="Konami";
			
			new Audio('http://nootlans2016.truudeli12.net/muuta/Konami.mp3').play();
			
			console.log("Konami code activated");
			
			//Lisää kuvan body tagiin
			var body = document.getElementsByTagName("BODY")[0];
			$(img).stop(true, true).fadeIn(500).delay(208000).fadeOut(4000);
			body.insertBefore(img, body.childNodes[0]);
			
		}

	});
}