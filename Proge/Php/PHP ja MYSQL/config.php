<?php
//***objektorjenteeritud***//
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'ulesanded';
$db_kasutaja = 'root';
$db_salasona = '';
//yhenduse loomine
$yhendus = new mysqli($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
// ühenduse kontroll
if(!$yhendus){
	die('Ei saa ühendust andmebaasiga');
}
//päring
$paring = 'SELECT * FROM muusika';	
$valjund = $yhendus->query($paring);
?>