<?php
$host = "localhost";
$user = "user";
$pass = "password";
$dbname = "nootlans";

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
