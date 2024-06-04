<?php
session_start();
if (!isset($_SESSION['tuvastamine'])) {
	header('Location: ul6login.php');
	exit();
}
if(isset($_POST['logout'])){
	session_destroy();
	header('Location: ul6admin.php');
	exit();
}
?>