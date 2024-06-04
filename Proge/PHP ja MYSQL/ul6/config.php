<?php
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'ulesanded';
$db_kasutaja = 'root';
$db_salasona = '';

//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
	die('Ei saa ühendust andmebaasiga');
}
?>