<?php
$host = "localhost";
$user = "truud269";
$pass = "JMW65YAJAV";
$dbname = "truud269_nootlans";

try //yritetään ottaa yhteys
{ 
$yhteys = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass); 
//echo "Connection successfull!";
//luo PDO-olion
} 
catch(PDOException $e) // jos ei onnistu (poikkeus)
{ 
echo $e->getMessage(); //antaa ilmoituksen siitä, missä virhe
}
?>