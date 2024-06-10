<?php
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'tieto';
$db_kasutaja = 'root';
$db_salasona = '';
//yhenduse loomine
$yhendus = new mysqli($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
// ühenduse kontroll
if(!$yhendus){
	die('Ei saa ühendust andmebaasiga');
}
